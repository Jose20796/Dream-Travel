<?php
require_once("../configuracion/config_empleado.php");
require_once("../controlador/empleado_controlador.php");
if(isset($_GET['m'])):    
    if(method_exists("modeloController",$_GET['m'])):
        modeloController::{$_GET['m']}();
    endif;
else:
    modeloController::index();
    
endif;
