<?php
defined('BASEPATH') or exit('');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // $this->genlib->checkLogin();

        $this->load->model(['item', 'packing', 'analytic']);
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     *
     */
    public function index()
    {
        $data['dailyImports'] = (int)$this->analytic->getDailyImports();
        $data['dailyPackings'] = (int)$this->analytic->getDailyPackings();
        $data['dailyLoadings'] = (int)$this->analytic->getDailyLoadings();
        $values['pageContent'] = $this->load->view('dashboard', $data, true);
        $values['pageTitle'] = "Dashboard";
        $this->load->view('main', $values);
    }

    /*
 ********************************************************************************************************************************
 */

}
