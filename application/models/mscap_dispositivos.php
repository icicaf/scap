<?php 

class Mscap_dispositivos extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
       //$this->scap_demo_db = $this->load->database('scapdemo',true);
        $this->load->database();
    }

    // Se registran los datos del dispositivo en el sistema SCAP
    // siempre que estos se encuentren previamente identificados.
    public function registrar_dispositivo($imeiDispositivo,$propietarioDispositivo,$funcionDispositivo);
    {
	    $query = $this->db->query('	SELECT *
									FROM
									    scap_dispositivos
									WHERE
									    BINARY dispositivo_imei = '.$imeiDispositivo.'
	    							AND dispositivo_status = 1');
	    $query->affected_rows();	
	    if($query=1)
	    {
	    	$DBdata = array('dispositivo_propietario'=>$propietarioDispositivo,
	    					'dispositivo_funcion'=>$funcionDispositivo)
	    	$this->db->trans_begin();
	    	$this->db->update('scap_dispositivos',$DBdata);
	    	$this->db->where('dispositivo_imei',$dispositivo_imei);
	    	$data = $this->db->affected_rows();
	    	return $data;
	    }	        
    }
}