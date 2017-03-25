<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

	/**
	 * 
	 * 
	 * 
	 */
	public function index()
	{
		$this->error_404();
	}

	/**
	 * 
	 * 
	 * 
	 */
	public function error_404()
	{
		$data["img"] = base_url().'public/template/fondo_login.svg';
		$this->load->view('errores/verror_404',$data);
	}
}