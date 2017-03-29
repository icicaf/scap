
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdispositivos extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_dispositivos');
        $this->load->helper('url');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function get_dispositivos()
	{
		$data['data'] = $this->mscap_dispositivos->get_all_dispositivos();
		
		$this->output
	        ->set_status_header(200)
	        ->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function insertar_dispositivo()
	{
		$data['dispositivo_ID'] = NULL;
		
		$data['dispositivo_imei'] = $this->input->post('imei');
		$data['dispositivo_obs'] = $this->input->post('obs');
		$data['dispositivo_status'] = 1;
		$data['dispositivo_fecha_hora_creacion'] = date('Y-m-d H:i:s');
		$data['dispositivo_propietario'] = NULL;
		$data['dispositivo_funcion'] = NULL;
		$data['dispositivo_fecha_hora_sync'] = NULL;
		
		$resultado = $this->mscap_dispositivos->insert_dispositivo($data);

		echo $resultado;
	}

	public function editar_dispositivo()
	{
		$id = $this->input->post('editar_id');

		$data['dispositivo_imei'] = $this->input->post('editar_imei');
		$data['dispositivo_status'] = $this->input->post('editar_status');
		
		$resultado = $this->mscap_dispositivos->update_dispositivo($id,$data);

		echo $resultado;
	}

	public function eliminar_dispositivo()
	{
		$id = $this->input->post('eliminar_id');
		
		$resultado = $this->mscap_dispositivos->delete_dispositivo($id);

		echo $resultado;
	}
}