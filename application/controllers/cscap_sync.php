<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
*	Clase Cscap_sync Controller 
*
*	@author SCAP DEV
*	@since 	Version 1.0
*/

class Cscap_sync extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('mscap_sync');
    }

    public function index()
    {
    	echo 'CONTROLADOR ACTIVO';
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que registra los datos enviados desde el dispositivo
    // Para ser registrado en el sistema SCAP
    public function registrar_dispositivo()
    {
        $arreglo_datos_dispositivo = array();
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            foreach ($datos_dispositivo[1] as $key2) {
                array_push($arreglo_datos_dispositivo, get_object_vars($key2));
            }
            $data=$this->registrar($imei,$arreglo_datos_dispositivo[0]);
            echo $data;
        }
        else
        {
            echo '0';
        }
    }

    public function registrar($imei,$datos)
    {
        $data=$this->mscap_sync->registrar_dispositivo($imei,$datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer las claves de lectura.
    public function getClaves()
    {
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            $data=$this->claves($imei);
            echo json_encode($data);
        }
        else
        {
            echo '0';
        }
    }

    public function claves($datos)
    {
        $data=$this->mscap_sync->getClaves($datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer las rutas de lectura.
    public function getRutas()
    {
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            $data=$this->rutas($imei);
            echo json_encode($data);
        }
        else
        {
            echo '0';
        }
    }

    public function rutas($datos)
    {
        $data=$this->mscap_sync->getRutas($datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer los operadores del sistema.
    public function getOperadores()
    {
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            $data=$this->operadores($imei);
            echo json_encode($data);
        }
        else
        {
            echo '0';
        }
    }

    public function operadores($datos)
    {
        $data=$this->mscap_sync->getOperadores($datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer rutas asignadas a los operadores.
    public function getRutasOperadores()
    {
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            $data=$this->rutas_operadores($imei);
            echo json_encode($data);
        }
        else
        {
            echo '0';
        }
    }

    public function rutas_operadores($datos)
    {
        $data=$this->mscap_sync->getRutasOperadores($datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite traer los servicios a leer.
    public function getlecturas()
    {
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }

            $data=$this->lecturas($imei);
            echo json_encode($data);
        }
        else
        {
            echo '0';
        }
    }

    public function lecturas($datos)
    {
        $data=$this->mscap_sync->getlecturas($datos);
        return $data;
    }

    //------------------------------------------------------------------------------------------------------------------------
    // Funcion que verifica el status del dispositivo
    // para autorizarlo a obtener datos desde el servidor
    // En este caso permite obtener desde el dispositivo
    // Las lecturas realizadas.
    public function sendLecturas()
    {
        $arreglo_datos_dispositivo = array();
        $datos_dispositivo = json_decode($this->input->post("datos_dispositivo"));

        if(!empty($datos_dispositivo))
        {
            /*foreach ($datos_dispositivo[0] as $key1) {
                $imei = $key1;
            }*/
            foreach ($datos_dispositivo[1] as $key2) {
                array_push($arreglo_datos_dispositivo, get_object_vars($key2));
            }

            $data=$this->lecturasCompletadas($arreglo_datos_dispositivo);
            echo $data;
        }
        else
        {
            echo '0';
        }
    }

    public function lecturasCompletadas($arreglo_lecturas)
    {
        $data=$this->mscap_sync->sendLecturas($arreglo_lecturas);
        return $data;
    }
}