<?php 
class Mscap_dispositivos extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Se registran los datos del dispositivo en el sistema SCAP
    // siempre que estos se encuentren previamente identificados.
    public function registrar_dispositivo($imeiDispositivo,$arreglo_datos_dispositivo)
    {
	    $this->db->update('scap_dispositivos',$arreglo_datos_dispositivo);
    	$this->db->where('dispositivo_imei',$imeiDispositivo);
    	$this->db->where('dispositivo_status','1');
    	$data = $this->db->affected_rows();
    	return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer las claves de lectura.
    public function getClaves($imei)
    {
    	//$imei=$datos['dispositivo_imei'];
    	$data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
    	$data->num_rows();
 		
 		if($data->num_rows()==1){
 			$query = $this->db->get('scap_claves');
 			return $query->result_array();
 		}else{
 			echo 'Reqistro no existe o esta duplicado';
 			return 0;
 		}   	
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer las rutas de lectura.
    public function getRutas($imei)
    {
    	//$imei=$datos['dispositivo_imei'];
    	$data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
    	$data->num_rows();
 		
 		if($data->num_rows()==1){
 			$query = $this->db->get('scap_rutas');
 			return $query->result_array();
 		}else{
 			echo 'Reqistro no existe o esta duplicado';
 			return 0;
 		}   	
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer operadores del sistema.
    public function getOperadores($imei)
    {
        //$imei=$datos['dispositivo_imei'];
        $data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
        $data->num_rows();
        
        if($data->num_rows()==1){
            $query = $this->db->get('scap_operadores');
            return $query->result_array();
        }else{
            echo 'Reqistro no existe o esta duplicado';
            return 0;
        }       
    }
}