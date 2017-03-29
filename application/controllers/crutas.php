
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crutas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_rutas');
        $this->load->helper('url');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function get_rutas()
	{
		$data['data'] = $this->mscap_rutas->get_all_rutas();
		
		$this->output
	        ->set_status_header(200)
	        ->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function insert_ruta()
	{
		$data['ruta_ID'] = NULL;
		
		$data['ruta_codigo'] = $this->input->post('codigo');
		$data['ruta_nombre'] = $this->input->post('nombre');
		$data['ruta_obs'] = $this->input->post('observacion');
		$data['ruta_localidad_ID'] = 1;
		$data['ruta_fecha_hora_creacion'] = date('Y-m-d H:i:s');
		
		$resultado = $this->mscap_rutas->insert_ruta($data);

		echo $resultado;
	}

	public function editar_ruta()
	{
		$id = $this->input->post('editar_id');

		$data['ruta_codigo'] = $this->input->post('editar_codigo');
		$data['ruta_nombre'] = $this->input->post('editar_nombre');
		$data['ruta_obs'] = $this->input->post('editar_observacion');
		
		$resultado = $this->mscap_rutas->update_ruta($id,$data);

		echo $resultado;
	}

	public function eliminar_ruta()
	{
		$id = $this->input->post('eliminar_id');
		
		$resultado = $this->mscap_rutas->delete_ruta($id);

		echo $resultado;
	}


}