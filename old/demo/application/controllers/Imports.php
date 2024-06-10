<?php
defined('BASEPATH') or exit('');
require_once 'functions.php';
class Imports extends CI_Controller
{
    private $total_before_discount = 0, $discount_amount = 0, $vat_amount = 0, $eventual_total = 0;

    public function __construct()
    {
        parent::__construct();

        //$this->genlib->checkLogin();

        $this->load->model(['Import']);
        $this->load->library('excel');
    }

    /*
     ********************************************************************************************************************************
     */

    public function index()
    {

        $data['pageContent'] = $this->load->view('imports/imports', '', true);
        $data['pageTitle'] = "Import";

        $this->load->view('main', $data);
    }

    public function ExcelDataAdd()
    {
        //Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)
        $configUpload['upload_path'] = FCPATH . 'application/uploads/excel/';
        $configUpload['allowed_types'] = 'xls|xlsx|csv';
        $configUpload['max_size'] = '5000';
        $this->load->library('upload', $configUpload);
        $this->upload->do_upload('userfile');
        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        $file_name = $upload_data['file_name']; //uploded file name
        $extension = $upload_data['file_ext']; // uploded file extension

        //$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003
        $objReader = PHPExcel_IOFactory::createReader('Excel2007'); // For excel 2007
        //Set to read only
        $objReader->setReadDataOnly(true);
        //Load excel file
        //$objPHPExcel=$objReader->load(FCPATH.'uploads/excel/'.$file_name);
        $objPHPExcel = $objReader->load(APPPATH . 'uploads/excel/' . $file_name);
        $totalrows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow(); //Count Numbe of rows avalable in excel
        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

        //loop from first data untill last data
        for ($i = 2; $i <= $totalrows; $i++) {
            // $barcode= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();
            $projectName = $objWorksheet->getCellByColumnAndRow(0, $i)->getValue();
            $cabinetName = $objWorksheet->getCellByColumnAndRow(1, $i)->getValue(); //Excel Column 1
            $partName = $objWorksheet->getCellByColumnAndRow(2, $i)->getValue(); //Excel Column 2
            $file_1 = $objWorksheet->getCellByColumnAndRow(3, $i)->getValue(); //Excel Column 2
            $file_2 = $objWorksheet->getCellByColumnAndRow(4, $i)->getValue(); //Excel Column 2
            $length = $objWorksheet->getCellByColumnAndRow(5, $i)->getValue(); //Excel Column 2
            $width = $objWorksheet->getCellByColumnAndRow(6, $i)->getValue(); //Excel Column 2
            $isPartRotation = $objWorksheet->getCellByColumnAndRow(7, $i)->getValue(); //Excel Column 2
            $quantity = $objWorksheet->getCellByColumnAndRow(8, $i)->getValue(); //Excel Column 2
            $material = $objWorksheet->getCellByColumnAndRow(9, $i)->getValue(); //Excel Column 2
            $thickness = $objWorksheet->getCellByColumnAndRow(10, $i)->getValue(); //Excel Column 2
            $edge_1 = $objWorksheet->getCellByColumnAndRow(11, $i)->getValue(); //Excel Column 2
            $edge_2 = $objWorksheet->getCellByColumnAndRow(12, $i)->getValue(); //Excel Column 2
            $edge_3 = $objWorksheet->getCellByColumnAndRow(13, $i)->getValue(); //Excel Column 2
            $edge_4 = $objWorksheet->getCellByColumnAndRow(14, $i)->getValue(); //Excel Column 2
            $xfield_1 = $objWorksheet->getCellByColumnAndRow(15, $i)->getValue(); //Excel Column 2
            $xfield_2 = $objWorksheet->getCellByColumnAndRow(16, $i)->getValue(); //Excel Column 2
            $xfield_3 = $objWorksheet->getCellByColumnAndRow(17, $i)->getValue(); //Excel Column 2
            $xfield_4 = $objWorksheet->getCellByColumnAndRow(18, $i)->getValue(); //Excel Column 2
            $xfield_5 = $objWorksheet->getCellByColumnAndRow(19, $i)->getValue(); //Excel Column 2
            $xfield_6 = $objWorksheet->getCellByColumnAndRow(20, $i)->getValue(); //Excel Column 2
            $xfield_7 = $objWorksheet->getCellByColumnAndRow(21, $i)->getValue(); //Excel Column 2
            $xfield_8 = $objWorksheet->getCellByColumnAndRow(22, $i)->getValue(); //Excel Column 2
            $xfield_9 = $objWorksheet->getCellByColumnAndRow(23, $i)->getValue(); //Excel Column 2
            $xfield_10 = $objWorksheet->getCellByColumnAndRow(24, $i)->getValue(); //Excel Column 2
            // $address=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
            $data_excel = array(

                'projectName' => $projectName,
                'cabinetName' => $cabinetName,
                'partName' => $partName,
                'file_1' => $file_1,
                'file_2' => $file_2,
                'length' => $length,
                'width' => $width,
                'isPartRotation' => $isPartRotation,
                'opquantity' => $quantity,
                'quantity' => $quantity,
                'material' => $material,
                'thickness' => $thickness,
                'edge_1' => $edge_1,
                'edge_2' => $edge_2,
                'edge_3' => $edge_3,
                'edge_4' => $edge_4,
                'xfield_1' => $xfield_1,
                'xfield_2' => $xfield_2,
                'xfield_3' => $xfield_3,
                'xfield_4' => $xfield_4,
                'xfield_5' => $xfield_5,
                'xfield_6' => $xfield_6,
                'xfield_7' => $xfield_7,
                'xfield_8' => $xfield_8,
                'xfield_9' => $xfield_9,
                'xfield_10' => $xfield_10);

            $this->Import->ImportProjects($data_excel);
        }
        $Path = './uploads/excel/' . $file_name;
        if (file_exists($Path)) {
            if (unlink($Path)) {
                redirect(base_url() . "imports");
            } else {
                //echo "fail";
            }
        } else {
            //echo "file does not exist";
        }
        redirect(base_url() . "imports");
    }

    /**
     * laid_ = "Load All Imported Data"
     */
    public function laid_()
    {
        //set the sort order
        $orderBy = $this->input->get('orderBy', true) ? $this->input->get('orderBy', true) : "id";
        $orderFormat = $this->input->get('orderFormat', true) ? $this->input->get('orderFormat', true) : "DESC";

        //count the total number of import group (grouping by the ref) in db
        $totalImports = $this->Import->totalImports();

        $this->load->library('pagination');

        $pageNumber = $this->uri->segment(3, 0); //set page number to zero if the page number is not set in the third segment of uri

        $limit = $this->input->get('limit', true) ? $this->input->get('limit', true) : 10; //show $limit per page
        $start = $pageNumber == 0 ? 0 : ($pageNumber - 1) * $limit; //start from 0 if pageNumber is 0, else start from the next iteration

        //call setPaginationConfig($totalRows, $urlToCall, $limit, $attributes) in genlib to configure pagination
        $config = $this->genlib->setPaginationConfig($totalImports, "imports/laid_", $limit, ['onclick' => 'return laid_(this.href);']);

        $this->pagination->initialize($config); //initialize the library class

        //get all Imports from db
        $data['allImports'] = $this->Import->getAll($orderBy, $orderFormat, $start, $limit);
        $data['range'] = $totalImports > 0 ? ($start + 1) . "-" . ($start + count($data['allImports'])) . " of " . $totalImports : "";
        $data['links'] = $this->pagination->create_links(); //page links
        $data['sn'] = $start + 1;

        $json['importTable'] = $this->load->view('imports/importstable', $data, true); //get view with populated Imports table

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    /*
 ********************************************************************************************************************************
 */

}
