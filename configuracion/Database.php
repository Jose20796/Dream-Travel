<?php

namespace Database\Config;

use PDO;
use PDOException;

class Conexion
{

    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=agencia_viajes_bd',"POO","");
            //echo "conexión exitosa";
        } catch (PDOException $e) {
            echo "Error --> ", $e->getMessage();
        }
    }
    public function get_conn(){
        return$this->conn;
    }

}

//$db = new Conexion();
