
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cclaves extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_claves');
        $this->load->helper('url');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function get_claves()
	{
		$data['data'] = $this->mscap_claves->get_claves();
		
		$this->output
	        ->set_status_header(200)
	        ->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function insert_clave()
	{
		$data['clave_ID'] = NULL;
		
		$data['clave_nombre'] = $this->input->post('clave_nombre');
		$data['clave_acronimo'] = $this->input->post('clave_acronimo');
		$data['clave_requiere_lectura'] = $this->input->post('clave_requiere_lectura');
		$data['clave_requiere_foto'] = $this->input->post('clave_requiere_foto');
		$data['clave_obs'] = $this->input->post('clave_obs');
		$data['clave_fecha_hora_creacion'] = date('Y-m-d H:i:s');
		
		$resultado = $this->mscap_claves->insert_clave($data);

		echo $resultado;
	}

	public function editar_clave()
	{
		$id = $this->input->post('editar_clave_id');

		$data['clave_nombre'] = $this->input->post('editar_clave_nombre');
		$data['clave_acronimo'] = $this->input->post('editar_clave_acronimo');
		$data['clave_requiere_lectura'] = $this->input->post('editar_clave_requiere_lectura');
		$data['clave_requiere_foto'] = $this->input->post('editar_clave_requiere_foto');
		$data['clave_obs'] = $this->input->post('editar_clave_obs');
		
		$resultado = $this->mscap_claves->update_clave($id,$data);

		echo $resultado;
	}

	public function eliminar_clave()
	{
		$id = $this->input->post('eliminar_clave_id');
		
		$resultado = $this->mscap_claves->delete_clave($id);

		echo $resultado;
	}
}