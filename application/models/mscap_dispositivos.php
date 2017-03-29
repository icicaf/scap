<?php 
class Mscap_dispositivos extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_dispositivos()
    {
        $SQL = "SELECT 
                    dispositivo_ID,
                    dispositivo_imei,
                    dispositivo_obs,
                    IF(dispositivo_status=1,'ACTIVO','INACTIVO') AS dispositivo_status,
                    DATE_FORMAT(dispositivo_fecha_hora_creacion, '%d-%m-%Y %H:%m') AS dispositivo_fecha_hora_creacion,
                    dispositivo_propietario,
                    dispositivo_funcion,
                    dispositivo_fecha_hora_sync
                FROM
                    scap_dispositivos";

        //DEBUG
        //echo $SQL;ADSD
        $query = $this->db->query($SQL);

        return  $query->result_array();             
    }

    //INGRESO DE UN SOLA RUTAS
    public function insert_dispositivo($data)
    {
        $this->db->insert('scap_dispositivos',$data);

        return $this->db->insert_id();
    }

    public function update_dispositivo($id,$data)
    {
        $this->db->where('dispositivo_ID',$id);
        $this->db->update('scap_dispositivos',$data);

        return $this->db->affected_rows();
    }

    public function delete_dispositivo($id)
    {
        $this->db->where('dispositivo_ID',$id);
        $this->db->delete('scap_dispositivos');

        return $this->db->affected_rows();
    }
}