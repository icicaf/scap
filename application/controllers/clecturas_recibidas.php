<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Clecturas_recibidas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('mscap_lecturas_recibidas');
		$this->load->helper('url');
	}

	public function index()
	{
		echo 'ok';
	}

	public function get_all_lecturas_recibidas()
	{
		$data['data'] = $this->mscap_lecturas_recibidas->get_all_lecturas_recibidas();
		
		$this->output->set_status_header(200)->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function descargar_planilla_excel($proceso)
	{
		//$proceso = $this->input->post('proceso')
		$this->load->library("PHPExcel.php");
		
		$data = $this->mscap_lecturas_recibidas->get_all_lecturas_recibidas_con_proceso($proceso);

		$objPHPExcel = new PHPExcel();

		$objPHPExcel->setActiveSheetIndex(0);

		$fila = 1;

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,'SERVICIO');
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,'PROCESO');
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila,'LECTURA');
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila,'CLAVE');
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,'FOTO');
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,'FECHA');
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,'OPERADOR');
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,'OBSERVACION');


		$fila = 2;
		foreach ($data as $key) {
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,$key["lectura_recibida_id_servicio"]);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,$key["lectura_recibida_id_proceso"]);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila,$key["lectura_recibida_actual"]);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila,$key["lectura_recibida_clave"]);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$key["lectura_recibida_nombre_foto"]);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$key["lectura_recibida_fecha_hora_captura"]);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$key["lectura_recibida_operador_login"]);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$key["lectura_recibida_obs"]);
			
			$fila++;
		}
		
		
		$objPHPExcel->getActiveSheet(0)->setTitle('lecturas');

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="lecturas.xlsx"');
		header('Cache-Control: max-age=0');
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
  		$objWriter->save('php://output');

		exit;
	}
}

?>