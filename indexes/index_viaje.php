<?php
require_once("../configuracion/config_viaje.php");
require_once("../controlador/viaje_controlador.php");
if(isset($_GET['m'])):    
    if(method_exists("modeloController",$_GET['m'])):
        modeloController::{$_GET['m']}();
    endif;
else:
    modeloController::index();
    
endif;
