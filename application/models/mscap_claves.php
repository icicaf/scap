<?php 

class Mscap_claves extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_claves()
    {
        $SQL = "SELECT 
                    clave_ID,
                    clave_nombre,
                    clave_acronimo,
                    clave_requiere_lectura,
                    clave_requiere_foto,
                    clave_obs,
                    clave_fecha_hora_creacion
                FROM
                    scap_claves";

        //DEBUG
        //echo $SQL;
        $query = $this->db->query($SQL);

        return  $query->result_array(); 
    }

     //INGRESO DE UN SOLA RUTAS
    public function insert_clave($data)
    {
        $this->db->insert('scap_claves',$data);

        return $this->db->insert_id();
    }

    public function update_clave($id,$data)
    {
        $this->db->where('clave_ID',$id);
        $this->db->update('scap_claves',$data);

        return $this->db->affected_rows();
    }

    public function delete_clave($id)
    {
        $this->db->where('clave_ID',$id);
        $this->db->delete('scap_claves');

        return $this->db->affected_rows();
    }
}