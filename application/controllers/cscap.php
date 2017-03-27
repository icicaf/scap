<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cscap extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
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
		$this->load->view('lecturas/vadministrar_lecturas');
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
	public function usuarios()
	{
		//$this->load->view('usuarios/vadministrar_usuarios');
	}

	/**
	 * 
	 */
	public function dispositivos()
	{
		//$this->load->view('dispositivos/vadministrar_dispositivos');
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