<?php
defined('BASEPATH') or exit('');
require_once 'functions.php';

class Packings extends CI_Controller
{
    private $total_before_discount = 0, $discount_amount = 0, $vat_amount = 0, $eventual_total = 0;

    public function __construct()
    {
        parent::__construct();

        $this->genlib->checkLogin();

        $this->load->model(['packing', 'item']);
        $this->load->library('form_validation');
    }

    /*
     ********************************************************************************************************************************
     */

    public function index()
    {
        // $pkgData['items'] = $this->item->getActiveItems('name', 'ASC');//get items with at least one qty left, to be used when doing a new packing
        $pkgData['projects'] = $this->item->getActiveProjects('name', 'ASC'); //get items with at least one qty left, to be used when doing a new packing

        $data['pageContent'] = $this->load->view('packings/packings', $pkgData, true);
        $data['pageTitle'] = "Packings";

        $this->load->view('main', $data);
    }
    public function projectNameList()
    {
        // $pkgData['items'] = $this->item->getActiveItems('name', 'ASC');//get items with at least one qty left, to be used when doing a new packing
        $pkgData['projects'] = $this->item->getActiveProjects('name', 'ASC'); //get items with at least one qty left, to be used when doing a new packing

        $data['pageContent'] = $this->load->view('packings/packings', $pkgData, true);
        $data['pageTitle'] = "Packings";
        echo json_encode($pkgData['projects']);

    }
    public function partNamesById($prjName)
    {
        $pkgData['items'] = $this->item->getActiveItems('modular_products.projectName="' . $prjName . '"', 'name', 'ASC'); //get items with at least one qty left, to be used when doing a new packing
        echo json_encode($pkgData['items']);
    }
    /*
     ********************************************************************************************************************************
     */

    /**
     * lapkg_ = "Load All packings"
     */
    public function lapkg_()
    {
        //set the sort order
        $orderBy = $this->input->get('orderBy', true) ? $this->input->get('orderBy', true) : "id";
        $orderFormat = $this->input->get('orderFormat', true) ? $this->input->get('orderFormat', true) : "DESC";

        //count the total number of packing group (grouping by the ref) in db
        $totalPackings = $this->packing->totalPackings();

        $this->load->library('pagination');

        $pageNumber = $this->uri->segment(3, 0); //set page number to zero if the page number is not set in the third segment of uri

        $limit = $this->input->get('limit', true) ? $this->input->get('limit', true) : 10; //show $limit per page
        $start = $pageNumber == 0 ? 0 : ($pageNumber - 1) * $limit; //start from 0 if pageNumber is 0, else start from the next iteration

        //call setPaginationConfig($totalRows, $urlToCall, $limit, $attributes) in genlib to configure pagination
        $config = $this->genlib->setPaginationConfig($totalPackings, "packings/lapkg_", $limit, ['onclick' => 'return lapkg_(this.href);']);

        $this->pagination->initialize($config); //initialize the library class

        //get all packings from db
        $data['allPackings'] = $this->packing->getAll($orderBy, $orderFormat, $start, $limit);
        $data['range'] = $totalPackings > 0 ? ($start + 1) . "-" . ($start + count($data['allPackings'])) . " of " . $totalPackings : "";
        $data['links'] = $this->pagination->create_links(); //page links
        $data['sn'] = $start + 1;

        $json['pkgTable'] = $this->load->view('packings/packingtable', $data, true); //get view with populated packings table

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * nso_ = "New Packing Slip"
     */
    public function nps_()
    {
        $this->genlib->ajaxOnly();

        $arrOfItemsDetails = json_decode($this->input->post('_aoi', true));

        /*
         * Loop through the arrOfItemsDetails and ensure each item's details has not been manipulated
         */

        //will insert info into db and return packing's receipt
        $returnedData = $this->insertHdrToDb($arrOfItemsDetails);

        $json['status'] = $returnedData ? 1 : 0;
        $json['msg'] = $returnedData ? "Packing Slip successfully created" :
        "Unable to process your request at this time. Pls try again later "
            . "or contact technical department for assistance";

        $json['pkgReceipt'] = $returnedData['pkgReceipt'];

        $eventDesc = count($arrOfItemsDetails) . " items totalling &#8358;"
            . " with reference number {$returnedData['pkgRef']} was packed";

        //$this->genmod->addevent("New Packing slip", $returnedData['pkgRef'], $eventDesc, 'packings', $this->session->admin_id);

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
        $allTransInfo = []; //to hold info of all items' in packing

        //start packing
        $this->db->trans_start();

        $prjName = "";
        $cbtName = "";
        $_icount = 1;
        $pkgId = "";
        foreach ($arrOfItemsDetails as $get) {
            if ($_icount == 1) {
                $pkgName = ""; //$get->_pkgName;
                $prjName = $get->_pkgPrjName;
                $cbtName = $get->_pkgCbtName;
                $pkgId = $this->packing->addHdr($pkgName, $prjName);
                $this->db->trans_complete(); //end packing
                $this->db->trans_start();
            }
            $_icount++;

            $itemCode = $this->item->getId(['file_1' => $get->_iC]);
            $pkgQty = $get->qty;

            /*
             * add packing to db
             */
            $pkgTrlId = $this->packing->addTrl($pkgId, $itemCode, $pkgQty);

            $allTransInfo[$pkgId] = ['pkg_id' => $pkgId, 'prd_id' => $itemCode, 'cbt_name' => $get->_pkgCbtName, 'part_name' => $get->_pkgPrtName, 'quantity' => $pkgQty];
            //update item quantity in db by removing the quantity bought
            //function header: decrementItem($itemId, $numberToRemove)
            $this->item->decrementItem($itemCode, $pkgQty);
        }

        $this->db->trans_complete(); //end packing

        //ensure there was no error
        //works in production since db_debug would have been turned off
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            $dataToReturn = [];

            $pkgInfo = $this->packing->getPkginfo($pkgId);
            $dataToReturn['pkgReceipt'] = $this->genPackingSlip($pkgInfo, $prjName, $cbtName, $pkgId);

            //glibline( "", "","","","","","" );

            //get packing date in db, to be used on the receipt. It is necessary since date and time must matc
            $dataToReturn['pkgRef'] =$pkgId; // $ref;

            return $dataToReturn;
        }
    }

    private function genPackingSlip($allTransInfo, $prjName, $cbtName, $pkgId)
    {
        $data['allTransInfo'] = $allTransInfo;
        $data['prjName'] = $prjName;
        $data['cbtName'] = $cbtName;
        $_SESSION['packingSlipId'] = $pkgId; //'VK'.substr(sprintf('%04d', $pkgId),0,4);
        //$data['barcode'] = $this->bcg($pkgId, "", '20', '', '', 'false', 1);
        //generate and return receipt
        $pkgReceipt = $this->load->view('packings/packingslip', $data, true);

        return $pkgReceipt;
    }

    /**
     * vtr_ = "View transaction's receipt"
     * Used when a transaction's ref is clicked
    **/
    public function vtr_()
    {
        $this->genlib->ajaxOnly();

        $ref = $this->input->post('ref');
        $ref = substr($ref,3);
        $ref = ltrim($ref, '0');
        
        $pkgInfo = $this->packing->getPkginfo($ref);

        //loop through the transInfo to get needed info
        if ($pkgInfo) {
            $json['status'] = 1;

            $prjName = $pkgInfo[0]['projectName'];
            $cbtName = $pkgInfo[0]['cabinetName'];

            $json['pkgReceipt'] = $this->genPackingSlip($pkgInfo, $prjName, $cbtName, $ref);
        } else {
            $json['status'] = 0;
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }
    /*
     ****************************************************************************************************************************
     */

    public function report($from_date, $to_date = '')
    {
        //get all packings from db ranging from $from_date to $to_date
        $data['from'] = $from_date;
        $data['to'] = $to_date ? $to_date : date('Y-m-d');

        $data['allPackings'] = $this->packing->getDateRange($from_date, $to_date);

        $this->load->view('packings/packingReport', $data);
    }

    /**
     *
     */
    public function gcoandqty()
    {
        $json['status'] = 0;

        $itemCode = $this->input->get('_iC', true);

        if ($itemCode) {
            $item_info = $this->packing->getPackingInfoById(['modular_packingLists.pkg_id' => $itemCode], ['modular_packings.projectName', 'modular_products.cabinetName', 'modular_products.partName', 'SUM(modular_packingLists.quantity) AS quantity']);

            if ($item_info) {
                $json['projectName'] = $item_info->projectName;
                // $json['cabinetName'] = $item_info->cabinetName;
                // $json['partName'] = $item_info->partName;
                $json['qty'] = (int) $item_info->quantity;
                $json['status'] = 1;
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }
    /**
     *
     * Active Packing List by Project
     */
    public function aplbp($prjName)
    {
        $json['status'] = 0;

        $itemCode = $this->input->get('_iC', true);
        //$item_info="";

        //if ($itemCode) {
        $item_info = $this->packing->getActivePackingIds(['modular_packings.projectName' => $prjName]);

        // if ($item_info) {
        //     $json['id'] = $item_info->id;
        //     $json['name'] = 'PKG'.substr(sprintf('%09d', $item_info->id),0,10);
        //      $json['status'] = 1;
        // }
        //}

        $this->output->set_content_type('application/json')->set_output(json_encode($item_info));
    }


}
