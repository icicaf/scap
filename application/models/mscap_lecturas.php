<?php 

class Mscap_lecturas extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // public function get_all_rutas()
    // {
    // 	$SQL = "SELECT 
    //                 ruta_ID,
    //                 ruta_codigo,
    //                 ruta_nombre,
    //                 ruta_fecha_hora_creacion,
    //                 ruta_obs,
    //                 ruta_localidad_ID
    //             FROM
    //                 scap_rutas";

    // 	//DEBUG
    // 	//echo $SQL;
	   //  $query = $this->db->query($SQL);

	   //  return	$query->result();		        
    // }

    //INGRESO DE lecturas
    public function insert_lecturas($data)
    {
    	$this->db->insert_batch('scap_lecturas',$data);

        return $this->db->insert_id();
    }
}