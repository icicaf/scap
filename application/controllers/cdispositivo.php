<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
*	Clase Cdispositivo Controller 
*
*	@author SCAP DEV
*	@since 	Version 1.0
*/

class Cdispositivo extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        //$this->load->model('mscap_dispositivos');
    }

    public function index()
    {
    	echo 'CONTROLADOR ACTIVO';
    }

    // Funcion que registra los datos enviados desde el dispositivo
    // Para ser registrado en el sistema SCAP
    /*public function registrar_dispositivo()
    {
    	$imeiDispositivo = $this->input->post('imeiDispositivo');
    	$propietarioDispositivo = $this->input->post('propietarioDispositivo');
    	$funcionDispositivo = $this->input->post('funcionDispositivo');

    	$data = $this->mscap_dispositivo->registrar_dispositivo($imeiDispositivo,$propietarioDispositivo,$funcionDispositivo);
    	echo json_encode($data);
    }*/
}