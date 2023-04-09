<?php
require('../vista/layouts/header.php')
?>

<h1 class="text-center">EDITAR</h1>
<form id="form_edit_cli" action="" method="GET">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <div class='container' align='center'>
        <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre" id="nombre"> <br>
        <input type="text" value="<?php echo $v['apellido'] ?>" name="apellido" id="apellido"> <br>
        <input type="text" value="<?php echo $v['correo'] ?>" name="correo" id="correo"> <br>
        <input type="text" value="<?php echo $v['telefono'] ?>" name="telefono" id="telefono"> <br>
        <input type="hidden" value="<?php echo $v['idcliente'] ?>" name="id" id="id"> <br>
        <input type="submit" class="btn-success" name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
        </div>
        
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<script src="../configuracion/js/jquery.js"></script>
<script src="../configuracion/js/jquery.validate.js"></script>
<script src="../configuracion/js/validate.js"></script>

<?php
require('../vista/layouts/footer.php')
?>