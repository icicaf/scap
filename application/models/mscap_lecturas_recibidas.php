<?php 

class Mscap_lecturas_recibidas extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_lecturas_recibidas_con_proceso($id_proceso)
    {
     	$SQL = "SELECT 
                     lectura_recibida_ID,
                     lectura_recibida_id_servicio,
                     lectura_recibida_id_proceso,
                     lectura_recibida_actual,
                     lectura_recibida_clave,
                     lectura_recibida_nombre_foto,
                    lectura_recibida_fecha_hora_captura,
                    lectura_recibida_operador_login,
                    lectura_recibida_obs,
                    lectura_recibida_fecha_hora_sincronizacion 
                 FROM
                    scap_lecturas_recibidas
                WHERE 
                    BINARY lectura_recibida_id_proceso='".$id_proceso."'";

        //DEBUG
        //echo $SQL;
	    $query = $this->db->query($SQL);

	    return $query->result_array();		        
    }

    public function get_all_lecturas_recibidas()
    {
        $SQL = "SELECT 
                     lectura_recibida_ID,
                     lectura_recibida_id_servicio,
                     lectura_recibida_id_proceso,
                     lectura_recibida_actual,
                     lectura_recibida_clave,
                     lectura_recibida_nombre_foto,
                    lectura_recibida_fecha_hora_captura,
                    lectura_recibida_operador_login,
                    lectura_recibida_obs,
                    lectura_recibida_fecha_hora_sincronizacion 
                 FROM
                    scap_lecturas_recibidas";

        //DEBUG
        //echo $SQL;
        $query = $this->db->query($SQL);

        return $query->result_array();              
    }

    public function get_all_procesos()
    {
        $SQL = "SELECT 
                    DISTINCT(lectura_recibida_id_proceso) AS lectura_recibida_id_proceso
                 FROM
                    scap_lecturas_recibidas";

        //DEBUG
        //echo $SQL;
        $query = $this->db->query($SQL);

        return $query->result_array();
    }
}