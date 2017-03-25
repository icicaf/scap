<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
    	$this->login();
    }

	/**
	 * 
	 * 
	 */

	public function login()
	{
		$this->load->helper('url');
		$this->load->view('login/vlogin');
	}
}