
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clecturas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_lecturas');
        $this->load->helper('url');
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
		$this->load->library('PHPExcel');

		$config['max_size'] = '9000';

		$this->load->library('upload',$config);

		$name   = $_FILES['planilla'];

		//print_r($name);

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
						                    'lectura_id_servicio'  => $value['A'],
						                    'lectura_id_proceso'  =>  $value['B'],
						                    'lectura_ruta_ID' => '1',
						                    'lectura_numero_medidor'  =>  $value['C'],
						                    'lectura_capacidad_medidor'  =>  $value['D'],
						                    'lectura_tarifa'  =>  $value['E'],
						                    'lectura_nombre_cliente'  =>  $value['F'],
						                    'lectura_direccion_cliente'  =>  $value['G'],
						                    'lectura_anterior'  =>  $value['H'],
						                    'lectura_indice_ruta'  =>  $value['I'],
						                    'lectura_fecha_hora_carga_archivo'  =>  $fecha_carga,
						                    'lectura_estado_sincronizacion'  =>  '1',
						                    'lectura_status'  =>  '1'
						              	));
   			} 
       	}

       	$this->mscap_lecturas->insert_lecturas($arreglo_lecturas);
       	print_r($arreglo_lecturas);
       	
       	//$result['valid'] = true;
		///$result['message'] = 'Productos importados correctamente';
		//$this->output->set_content_type('application/json')->set_output(json_encode($result)); 	
	}
}