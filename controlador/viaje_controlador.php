<?php
require_once("../modelo/viaje_modelo.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $viaje   = new Modelo();
        $dato       =   $viaje->mostrar("viaje","1");
        require_once("../vista/viaje_vista.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("../vista/insertar/nuevo_viaje.php");
    }
    //guardar
    static function guardar(){
        $destino= $_REQUEST['destino'];
        $fecha_s= $_REQUEST['fecha_salida'];
        $fecha_r= $_REQUEST['fecha_regreso'];
        $precio= $_REQUEST['precio'];
        $idcliente= $_REQUEST['idcliente'];
        $idempleado= $_REQUEST['idempleado'];
        $data = "'".$destino."','".$fecha_s."','".$fecha_r."',".$precio.",".$idcliente.",".$idempleado;
        $viaje = new Modelo();
        $dato = $viaje->insertar("viaje",$data);
        header("location:".urlsite);
        
    }

    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $viaje = new Modelo();
        $dato = $viaje->mostrar("viaje","idviaje=".$id);        
        require_once("../vista/actualizar/editar_viaje.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $destino= $_REQUEST['destino'];
        $fecha_s= $_REQUEST['fecha_salida'];
        $fecha_r= $_REQUEST['fecha_regreso'];
        $precio= $_REQUEST['precio'];
        $idcliente= $_REQUEST['idcliente'];
        $idempleado= $_REQUEST['idempleado'];
        $data = "destino='".$destino."',fecha_salida='".$fecha_s."',fecha_regreso='".$fecha_r."',precio=".$precio.",idcliente=".$idcliente.",idempleado=".$idempleado;
        $viaje = new Modelo();
        $dato = $viaje->actualizar("viaje",$data,"idviaje=".$id);
        header("location:".urlsite);
    }

    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $viaje = new Modelo();
        $dato = $viaje->eliminar("viaje","idviaje=".$id);
        header("location:".urlsite);
    }


}