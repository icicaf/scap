<?php 

class Mscap_usuarios extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
    }

    public function get_credencial_usuario($usuario, $password)
    {
	    $query = $this->db->query("SELECT 
						    usuario_ID,
						    usuario_login,
						    usuario_pass,
						    usuario_nombre,
						    usuario_email,
						    usuario_fecha_registro
						FROM
						    scap_usuarios
						WHERE
						    BINARY usuario_login = '".$usuario."' 
						        AND BINARY usuario_pass = '".$password."'");

	    return	$query->result_array();		        
    }
}