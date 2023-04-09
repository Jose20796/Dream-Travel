<?php
require_once("../modelo/cliente_modelo.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $cliente   = new Modelo();
        $dato       =   $cliente->mostrar("cliente","1");
        require_once("../vista/cliente_vista.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("../vista/insertar/nuevo_cliente.php");
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $correo= $_REQUEST['correo'];
        $telefono= $_REQUEST['telefono'];
        $data = "'".$nombre."','".$apellido."','".$correo."','".$telefono."'";
        $cliente = new Modelo();
        $dato = $cliente->insertar("cliente",$data);
        header("location:".urlsite);
        
    }

    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $cliente = new Modelo();
        $dato = $cliente->mostrar("cliente","idcliente=".$id);        
        require_once("../vista/actualizar/editar_cliente.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $correo= $_REQUEST['correo'];
        $telefono= $_REQUEST['telefono'];
        $data = "nombre='".$nombre."', apellido='".$apellido."', correo='".$correo."', telefono='".$telefono."'";
        $cliente = new Modelo();
        $dato = $cliente->actualizar("cliente",$data,"idcliente=".$id);
        header("location:".urlsite);
    }

    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $cliente = new Modelo();
        $dato = $cliente->eliminar("cliente","idcliente=".$id);
        header("location:".urlsite);
    }


}