<?php 

class Mscap_operadores extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_operadores()
    {
    	$SQL = "SELECT 
                    operador_ID,
                    operador_login,
                    operador_pass,
                    operador_nombre,
                    operador_obs,
                    DATE_FORMAT(operador_fecha_hora_creacion, '%d-%m-%Y %H:%m') AS operador_fecha_hora_creacion,
                    operador_fecha_hora_sync,
                    IF(operador_status=1,'ACTIVO','INACTIVO') AS operador_status,
                FROM
                    scap_operadores";

    	//DEBUG
    	//echo $SQL;
	    $query = $this->db->query($SQL);

	    return	$query->result_array();		        
    }

    //INGRESO DE UN SOLA RUTAS
    public function insert_operador($data)
    {
    	$this->db->insert('scap_operadores',$data);

        return $this->db->insert_id();
    }

    public function update_operador($id,$data)
    {
        $this->db->where('operador_ID',$id);
        $this->db->update('scap_operadores',$data);

        return $this->db->affected_rows();
    }

    public function delete_operador($id)
    {
        $this->db->where('operador_ID',$id);
        $this->db->delete('scap_operadores');

        return $this->db->affected_rows();
    }
}