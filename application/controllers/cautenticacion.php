<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cautenticacion extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
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
		$this->load->model('mscap_usuarios');

		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');


		$data["credencial"] = $this->mscap_usuarios->get_credencial_usuario($usuario, hash('sha512',$password));

		//DEBUG
		//print_r($data["credencial"]);
		
		if (!empty($data["credencial"]))
		{
			redirect('../../chome');
		}
		else
		{	
			redirect('../../');
		}
	}
}