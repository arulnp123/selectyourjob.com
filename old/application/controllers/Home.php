<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin');

       // $_SESSION['admin_id'] = 1;
       
        //$this->session->sess_destroy();
        
        if (empty($_SESSION['modular'])) {
            $cmpData['item'] = $this->admin->getData();
            $_SESSION['modular'] = $cmpData['item'];
        }
        if (!empty($_SESSION['admin_id'])) {
            redirect(CMP_domain.'dashboard');
        }
    }

    /*
     ********************************************************************************************************************************
     */

    public function index()
    {
         $_SESSION["_loginForm"] = "home.php";
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $cmpData['item'] = $this->admin->getData();
        $_SESSION['modular'] = $cmpData['item'];
        $this->load->view('home');
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     *
     */
    public function login()
    {
        $this->genlib->ajaxOnly();

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('', '');
        $_SESSION['comp_id'] = $_SESSION['modular'];
        $this->form_validation->set_rules('email', 'E-mail', ['required', 'trim', 'valid_email']);
        $this->form_validation->set_rules('password', 'Password', ['required']);
       
       
        if ($this->form_validation->run() !== false) {
            $givenEmail = strtolower(set_value('email'));
            $givenPassword = set_value('password');

            $passwordInDb = $this->genmod->getTableCol('modular_admin', 'password', 'email', $givenEmail);
            $account_status = $this->genmod->getTableCol('modular_admin', 'isActive', 'email', $givenEmail);
            //$deleted = $this->genmod->getTableCol('admin', 'deleted', 'email', $givenEmail);

            //verify password if $passwordInDb has a value (i.e. is set)
            $verifiedPassword = $passwordInDb ? password_verify($givenPassword, $passwordInDb) : false;

            //allow log in if password and email matches and admin's account has not been suspended or deleted
            if ($verifiedPassword && $account_status != 0) {
                $this->load->model('admin');

                //set session details
                $admin_info = $this->admin->get_admin_info($givenEmail);

                if ($admin_info) {
                    foreach ($admin_info as $get) {
                        $admin_id = $get->id;

                        $_SESSION['admin_id'] = $admin_id;
                        $_SESSION['admin_email'] = $givenEmail;
                        $_SESSION['admin_role'] = $get->role;
                        $_SESSION['admin_initial'] = strtoupper(substr($get->name, 0, 1));
                        $_SESSION['admin_name'] = $get->name; //. " " . $get->last_name;
                    }

                    //update user's last log in time
                    // $this->admin->update_last_login($admin_id);
                }

                $json['status'] = 1; //set status to return
            } else { //if password is not correct
               // $json['msg'] = $passwordInDb." ---- " . $account_status. " test Incorrect email and password combination";
                $json['msg'] = " test test";
                $json['status'] = 0;
            }
        } else { //if form validation fails
            $json['msg'] = "One or more required fields are empty or not correctly filled";
            $json['status'] = 0;
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    /*
 ********************************************************************************************************************************
 */
}
