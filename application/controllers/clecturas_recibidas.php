
<?php

class Clecturas_recibidas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mscap_lecturas_recibidas');

        $this->load->helper('url');
    }
	/**
	 * 
	 */

	public function index()
	{
		echo 'ok';
	}

	public function get_all_lecturas_recibidas()
	{
		$data['data'] = $this->mscap_lecturas_recibidas->get_all_lecturas_recibidas();
		
		$this->output
	        ->set_status_header(200)
	        ->set_content_type('application/json', 'utf-8');

		echo json_encode($data);
	}

	public function descargar_planilla_excel()
	{
		$this->load->library("PHPExcel");
		
		$phpexcel = new PHPExcel();

		$phpexcel->setActiveSheetIndex(0)
						->setCellValue('A1','HOLA');

		$phpexcel->getActiveSheet(0)->setTitle('Simple');

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  		header('Content-Disposition: attachment;filename="export.xls"');
  		header('Cache-Control: max-age=0');

		$ob = PHPExcel_IOfactory::createWriter($phpexcel,'Excel2007');
		$ob->save('php://output');

		exit;
	}
}

?>