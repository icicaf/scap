
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clecturas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
       
        $this->load->helper('url');
        $this->load->model('mscap_lecturas');
        $this->load->model('mscap_lecturas_recibidas');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function cargar_excel()
	{
		
		$config['max_size'] = '9000';
		$this->load->library('upload',$config);

		$name   = $_FILES['planilla'];
		$id_proceso = $this->input->post('proceso');
		$codigo_ruta = $this->input->post('ruta');

		//print_r($name);

		$this->load->library('PHPExcel');
     	$obj_excel = PHPExcel_IOFactory::load($name['tmp_name']); 
       	$sheetData = $obj_excel->getActiveSheet()->toArray(null,true,true,true);
       	$arreglo_lecturas = array();

       	$fecha_carga = date('Y-m-d H:i:s');

       	foreach ($sheetData as $index => $value) 
       	{            
       		//print_r($value);
            if ( $index != 1 ) 
            {
                array_push($arreglo_lecturas, array('lectura_ID'  => NULL,
						                    'lectura_id_servicio' => $value['A'],
						                    'lectura_id_proceso' =>  $id_proceso,
						                    'lectura_ruta_ID' => $codigo_ruta,
						                    'lectura_numero_medidor' => $value['B'],
						                    'lectura_capacidad_medidor' => $value['C'],
						                    'lectura_tarifa' => $value['D'],
						                    'lectura_nombre_cliente' => $value['E'],
						                    'lectura_direccion_cliente' => $value['F'],
						                    'lectura_anterior' => $value['G'],
						                    'lectura_indice_ruta' => $value['H'],
						                    'lectura_fecha_hora_carga_archivo' => $fecha_carga,
						                    'lectura_estado_sincronizacion' => '1',
						                    'lectura_status' =>  '1'
						              	));
   			} 
       	}

       	//VALIDACION DE LOS DATOS
       	$arreglo_lecturas;


       	$resultadato = $this->mscap_lecturas->insert_lecturas($arreglo_lecturas);
       	//print_r($arreglo_lecturas);

       	echo 1;
	}
}