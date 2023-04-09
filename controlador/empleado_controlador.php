<?php
require_once("../modelo/empleado_modelo.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $empleado   = new Modelo();
        $dato       =   $empleado->mostrar("empleado","1");
        require_once("../vista/empleado_vista.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("../vista/insertar/nuevo_empleado.php");
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $correo= $_REQUEST['correo'];
        $telefono= $_REQUEST['telefono'];
        $data = "'".$nombre."','".$apellido."','".$correo."','".$telefono."'";
        $empleado = new Modelo();
        $dato = $empleado->insertar("empleado",$data);
        header("location:".urlsite);
    }

    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $empleado = new Modelo();
        $dato = $empleado->mostrar("empleado","idempleado=".$id);        
        require_once("../vista/actualizar/editar_empleado.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $correo= $_REQUEST['correo'];
        $telefono= $_REQUEST['telefono'];
        $data = "nombre='".$nombre."', apellido='".$apellido."', correo='".$correo."', telefono='".$telefono."'";
        $empleado = new Modelo();
        $dato = $empleado->actualizar("empleado",$data,"idempleado=".$id);
        header("location:".urlsite);
        
    }

    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $empleado = new Modelo();
        $dato = $empleado->eliminar("empleado","idempleado=".$id);
        header("location:".urlsite);
    }


}