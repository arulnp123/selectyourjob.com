<?php
defined('BASEPATH') OR exit('');

class Reports extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        
        $this->genlib->checkLogin();
        
        $this->genlib->superOnly();
    }
    
    
    /*
    ********************************************************************************************************************************
    */
    
    public function index(){
        $data['pageContent'] = $this->load->view('reports/reports', '', TRUE);
        $data['pageTitle'] = "Reports";
        
        $this->load->view('main', $data);
    }
}