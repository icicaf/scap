
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cscap extends CI_Controller {

	/**
	 * 
	 */

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->view('home/vhome');
	}
}