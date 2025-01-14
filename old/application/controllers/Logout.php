<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once "functions.php";

class Logout extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
            
            
            
    public function index(){
       
        //$this->users->logout($_SESSION['userId']);
        
        $this->session->sess_destroy();
        
        //unset($_SESSION['userId']);
        

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
        
        session_write_close();
        
        redirect(base_url());
    }
}