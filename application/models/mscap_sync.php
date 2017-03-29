<?php 
class Mscap_sync extends CI_Model
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

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer operadores del sistema.
    public function getRutasOperadores($imei)
    {
        $data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
        $data->num_rows();
        
        if($data->num_rows()==1){
            $query = $this->db->query(' SELECT  A.ruta_operador_ID AS ruta_operador_ID,
                                                B.ruta_ID AS ruta_ID,
                                                C.operador_login AS operador_login
                                        FROM scap_rutas_operadores AS A 
                                        INNER JOIN scap_rutas AS B ON B.ruta_ID = A.ruta_ID
                                        INNER JOIN scap_operadores AS C ON C.operador_ID = A.operador_ID');
            return $query->result_array();
        }else{
            echo 'Reqistro no existe o esta duplicado';
            return 0;
        }       
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer los servicios a leer.
    public function getLecturas($imei)
    {
        $data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
        $data->num_rows();
        
        if($data->num_rows()==1){
            $query = $this->db->get('scap_lecturas');
            return $query->result_array();
        }else{
            echo 'Reqistro no existe o esta duplicado';
            return 0;
        }       
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite obtener desde el dispositivo
    // Las lecturas realizadas.
    public function sendLecturas($imei,$arreglo_lecturas)
    {
        $data=$this->db->query('SELECT * FROM scap_dispositivos WHERE dispositivo_status=1 AND dispositivo_imei='.$imei);
        $data->num_rows();
        
        if($data->num_rows()==1){
            $cont=0;
            foreach ($arreglo_lecturas as $key) {
                $data=$this->db->insert('scap_lecturas_recibidas',$arreglo_lecturas[$cont]);
                $cont++;
            }
            return $datas;
        }else{
            echo 'Reqistro no existe o esta duplicado';
            return 0;
        }       
    }
}