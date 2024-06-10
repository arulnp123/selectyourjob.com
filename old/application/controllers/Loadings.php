<?php
defined('BASEPATH') or exit('');
require_once 'functions.php';

class Loadings extends CI_Controller
{
    private $total_before_discount = 0, $discount_amount = 0, $vat_amount = 0, $eventual_total = 0;

    public function __construct()
    {
        parent::__construct();

        $this->genlib->checkLogin();

        $this->load->model(['loading', 'packing']);
        $this->load->library('form_validation');
    }

    /*
     ********************************************************************************************************************************
     */

    public function index()
    {
        // $ldgData['items'] = $this->item->getActiveItems('name', 'ASC');//get items with at least one qty left, to be used when doing a new loading
        $ldgData['items'] = $this->packing->getActivePackingsInfo(); //get items with at least one qty left, to be used when doing a new loading

        $data['pageContent'] = $this->load->view('loadings/loadings', $ldgData, true);
        $data['pageTitle'] = "Loadings";

        $this->load->view('main', $data);
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * laldg_ = "Load All loadings"
     */
    public function laldg_()
    {
        //set the sort order
        $orderBy = $this->input->get('orderBy', true) ? $this->input->get('orderBy', true) : "id";
        $orderFormat = $this->input->get('orderFormat', true) ? $this->input->get('orderFormat', true) : "DESC";

        //count the total number of loading group (grouping by the ref) in db
        $totalLoadings = $this->loading->totalLoadings();

        $this->load->library('pagination');

        $pageNumber = $this->uri->segment(3, 0); //set page number to zero if the page number is not set in the third segment of uri

        $limit = $this->input->get('limit', true) ? $this->input->get('limit', true) : 10; //show $limit per page
        $start = $pageNumber == 0 ? 0 : ($pageNumber - 1) * $limit; //start from 0 if pageNumber is 0, else start from the next iteration

        //call setPaginationConfig($totalRows, $urlToCall, $limit, $attributes) in genlib to configure pagination
        $config = $this->genlib->setPaginationConfig($totalLoadings, "loadings/laldg_", $limit, ['onclick' => 'return laldg_(this.href);']);

        $this->pagination->initialize($config); //initialize the library class

        //get all loadings from db
        $data['allLoadings'] = $this->loading->getAll($orderBy, $orderFormat, $start, $limit);
        $data['range'] = $totalLoadings > 0 ? ($start + 1) . "-" . ($start + count($data['allLoadings'])) . " of " . $totalLoadings : "";
        $data['links'] = $this->pagination->create_links(); //page links
        $data['sn'] = $start + 1;

        $json['ldgTable'] = $this->load->view('loadings/loadingtable', $data, true); //get view with populated loadings table

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }
    /**
     * laldg_ = "Load All loadings"
     */
    public function laldgbyid_()
    {
        //set the sort order
        $orderBy = $this->input->get('orderBy', true) ? $this->input->get('orderBy', true) : "id";
        $orderFormat = $this->input->get('orderFormat', true) ? $this->input->get('orderFormat', true) : "DESC";

        //count the total number of loading group (grouping by the ref) in db
        $totalLoadings = $this->loading->totalLoadings();

        $this->load->library('pagination');

        $pageNumber = $this->uri->segment(3, 0); //set page number to zero if the page number is not set in the third segment of uri

        $limit = $this->input->get('limit', true) ? $this->input->get('limit', true) : 10; //show $limit per page
        $start = $pageNumber == 0 ? 0 : ($pageNumber - 1) * $limit; //start from 0 if pageNumber is 0, else start from the next iteration

        //call setPaginationConfig($totalRows, $urlToCall, $limit, $attributes) in genlib to configure pagination
        $config = $this->genlib->setPaginationConfig($totalLoadings, "loadings/laldg_", $limit, ['onclick' => 'return laldg_(this.href);']);

        $this->pagination->initialize($config); //initialize the library class

        //get all loadings from db
        $data['allLoadings'] = $this->loading->getAll($orderBy, $orderFormat, $start, $limit);
        $data['range'] = $totalLoadings > 0 ? ($start + 1) . "-" . ($start + count($data['allLoadings'])) . " of " . $totalLoadings : "";
        $data['links'] = $this->pagination->create_links(); //page links
        $data['sn'] = $start + 1;

        $json['ldgTable'] = $this->load->view('loadings/loadingtable', $data, true); //get view with populated loadings table

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }
    /*
     ********************************************************************************************************************************
     */

    /**
     * nso_ = "New Loading Slip"
     */
    public function nls_()
    {
        $this->genlib->ajaxOnly();

        $arrOfItemsDetails = json_decode($this->input->post('_aoi', true));

        /*
         * Loop through the arrOfItemsDetails and ensure each item's details has not been manipulated
         */

        //will insert info into db and return loading's receipt
        $returnedData = $this->insertHdrToDb($arrOfItemsDetails);

        $json['status'] = $returnedData ? 1 : 0;
        $json['msg'] = $returnedData ? "Loading Slip successfully created" :
        "Unable to process your request at this time. Pls try again later "
            . "or contact technical department for assistance";

        //$json['ldgReceipt'] = $returnedData['transReceipt'];

        $eventDesc = count($arrOfItemsDetails) . " items totalling &#8358;"
            . " with reference number {$returnedData['ldgRef']} was packed";

        $this->genmod->addevent("New Loading slip", $returnedData['ldgRef'], $eventDesc, 'loadings', $this->session->admin_id);

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     *
     * @param type $arrOfItemsDetails
     * @return boolean
     */
    private function insertHdrToDb($arrOfItemsDetails)
    {
        $allTransInfo = []; //to hold info of all items' in loading

        //start loading
        $this->db->trans_start();

        $_icount = 1;
        foreach ($arrOfItemsDetails as $get) {
            if ($_icount == 1) {
                $ldgContactName = $get->_ldgDesc;
                $ldgAddress = $get->_ldgAddress;
                $ldgCity = $get->_ldgCity;
                $ldgContactNo = $get->_ldgContactNos;
                $ldgId = $this->loading->addHdr($ldgContactName, $ldgAddress, $ldgCity, $ldgContactNo);
            }
            $_icount++;

            $pkgCode = $get->_iC;

            /*
             * add loading to db
             */
            $ldgTrlId = $this->loading->addTrl($ldgId, $pkgCode);
            $allTransInfo[$ldgId] = ['ldg_id' => $ldgId, 'pkg_id' => $pkgCode];
        }

        $this->db->trans_complete(); //end loading

        //ensure there was no error
        //works in production since db_debug would have been turned off
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            $dataToReturn = [];
            //$dataToReturn['loadingSlip'] = $this->genLoadingSlip($allTransInfo, $ldgDesc);

            //get loading date in db, to be used on the receipt. It is necessary since date and time must matc
            $dataToReturn['ldgRef'] = 1; // $ref;

            return $dataToReturn;
        }
    }
    public function vtr_()
    {
        $this->genlib->ajaxOnly();

        $ref = $this->input->post('ref');
        $ref = substr($ref, 3);
        $ref = ltrim($ref, '0');
        $ldgInfo = $this->loading->getLdginfo($ref);

        //loop through the transInfo to get needed info
        if ($ldgInfo) {
            $json['status'] = 1;

            $custName = $ldgInfo[0]['customerName'];
            $custAddress = $ldgInfo[0]['address'].','. $ldgInfo[0]['city'];;
            $custContactNo = $ldgInfo[0]['contactNos'];
            $prjName = $ldgInfo[0]['projectName'];
            $cbtName = $ldgInfo[0]['cabinetName'];
            $loadingon = $ldgInfo[0]['loadingOn'];

            $json['loadingSlip'] = $this->genLoadingSlip($ldgInfo, $custName, $prjName,  $custAddress, $custContactNo,  $cbtName, $ref,$loadingon);
        } else {
            $json['status'] = 0;
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }
    private function genLoadingSlip($allTransInfo, $custName, $prjName,  $custAddress, $custContactNo,  $cbtName, $ref,$loadingon)
    {
        $data['allTransInfo'] = $allTransInfo;
        $data['prjName'] = $prjName;
        $data['custName'] = $custName;
        $data['custAddress'] = $custAddress;
        $data['custContactNo'] = $custContactNo;
        $data['ref'] = $ref;
        $data['loadingon'] = $loadingon;
    

        //generate and return receipt
        $ldgReceipt = $this->load->view('loadings/loadingslip', $data, true);

        return $ldgReceipt;
    }

    /*
     ****************************************************************************************************************************
     */

    public function report($from_date, $to_date = '')
    {
        //get all loadings from db ranging from $from_date to $to_date
        $data['from'] = $from_date;
        $data['to'] = $to_date ? $to_date : date('Y-m-d');

        $data['allLoadings'] = $this->loading->getDateRange($from_date, $to_date);

        $this->load->view('loadings/loadingReport', $data);
    }
}
