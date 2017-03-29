
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coperadores extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_operadores');
        $this->load->helper('url');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function get_operadores()
	{
		$data['data'] = $this->mscap_operadores->get_all_operadores();
		
		$this->output
	        ->set_status_header(200)
	        ->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function insertar_operador()
	{
		$data['operador_ID'] = NULL;
		
		$data['operador_login'] = $this->input->post('login');
		$data['operador_pass'] = $this->input->post('pass');
		$data['operador_nombre'] = $this->input->post('nombre');
		$data['operador_obs'] = $this->input->post('observacion');
		$data['operador_status'] = $this->input->post('status');

		$data['operador_fecha_hora_creacion'] = date('Y-m-d H:i:s');

		$data['operador_fecha_hora_creacion'] = date('Y-m-d H:i:s');
		
		$resultado = $this->mscap_operadores->insert_operador($data);

		echo $resultado;
	}

	public function editar_operador()
	{
		$id = $this->input->post('editar_id');

		$data['operador_pass'] = $this->input->post('editar_pass');
		$data['operador_nombre'] = $this->input->post('editar_nombre');
		$data['operador_obs'] = $this->input->post('editar_obs');
		$data['operador_status'] = $this->input->post('editar_status');
		
		$resultado = $this->mscap_operadores->update_operador($id,$data);

		echo $resultado;
	}

	public function eliminar_operador()
	{
		$id = $this->input->post('eliminar_id');
		
		$resultado = $this->mscap_operadores->delete_operador($id);

		echo $resultado;
	}


}