<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	$this->load->view('header');
        $this->load->view('login');
    	$this->load->view('footer');
    }

}

?>