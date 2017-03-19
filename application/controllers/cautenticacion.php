<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cautenticacion extends CI_Controller {

	/**
	 * 
	 */

	public function index()
	{
		$this->autenticar_usuario();
	}

	/**
	 * 
	 */

	public function autenticar_usuario()
	{
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');

		if($usuario == "demo" && $password == "demo")
		{
			echo 'ok';
		}
		else
		{
			redirect('../../');
		}
	}
}