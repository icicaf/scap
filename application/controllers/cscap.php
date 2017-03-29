<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cscap extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

	/**
	 * 
	 */
	public function index()
	{
		$this->load->view('home/vhome');
	}

	/**
	 * 
	 */
	public function inicio()
	{
		
	}

	/**
	 * 
	 */

	public function lecturas()
	{
		$this->load->model('mscap_rutas');
		$this->load->model('mscap_lecturas_recibidas');


		$data["rutas"] = $this->mscap_rutas->get_all_rutas();
		$data["procesos"] = $this->mscap_lecturas_recibidas->get_all_procesos();

		
		
		$this->load->view('lecturas/vadministrar_lecturas',$data);
	}

	/**
	 * 
	 */
	public function rutas()
	{
		$this->load->view('rutas/vadministrar_rutas');
	}

	/**
	 * 
	 */
	public function operadores()
	{
		$this->load->view('operarios/vadministrar_operarios');
	}

	/**
	 * 
	 */
	public function dispositivos()
	{
		$this->load->view('dispositivos/vadministrar_dispositivos');
	}


	/**
	 * 
	 */
	public function configuracion()
	{
		//$this->load->view('configuracion/vconfiguracion');
	}

	/**
	 * 
	 */
	public function salir()
	{
		
	}
}