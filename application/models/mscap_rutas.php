<?php 

class Mscap_rutas extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_rutas()
    {
    	$SQL = "SELECT 
                    ruta_ID,
                    ruta_codigo,
                    ruta_nombre,
                    DATE_FORMAT(ruta_fecha_hora_creacion,'%d-%m-%Y %H:%m') AS ruta_fecha_hora_creacion,
                    ruta_obs,
                    ruta_localidad_ID
                FROM
                    scap_rutas";

    	//DEBUG
    	//echo $SQL;
	    $query = $this->db->query($SQL);

	    return	$query->result_array();		        
    }

    //INGRESO DE UN SOLA RUTAS
    public function insert_ruta($data)
    {
    	$this->db->insert('scap_rutas',$data);

        return $this->db->insert_id();
    }

    public function update_ruta($id,$data)
    {
        $this->db->where('ruta_ID',$id);
        $this->db->update('scap_rutas',$data);

        return $this->db->affected_rows();
    }

    public function delete_ruta($id)
    {
        $this->db->where('ruta_ID',$id);
        $this->db->delete('scap_rutas');

        return $this->db->affected_rows();
    }
}