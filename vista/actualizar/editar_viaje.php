<?php
require('../vista/layouts/header.php')
?>

<h1 class="text-center">EDITAR</h1>
<form id="form_edit_via" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <div class='container' align='center'>
        <input type="text" value="<?php echo $v['destino'] ?>" name="destino" id="destino"> <br>
        <input type="text" value="<?php echo $v['fecha_salida'] ?>" name="fecha_salida" id="fecha_salida"> <br>
        <input type="text" value="<?php echo $v['fecha_regreso'] ?>" name="fecha_regreso" id="fecha_regreso"> <br>
        <input type="text" value="<?php echo $v['precio'] ?>" name="precio" id="precio"> <br>
        <input type="text" value="<?php echo $v['idcliente'] ?>" name="idcliente" id="idcliente"> <br>
        <input type="text" value="<?php echo $v['idempleado'] ?>" name="idempleado" id="idempleado"> <br>
        <input type="hidden" value="<?php echo $v['idviaje'] ?>" name="id" id="id"> <br>
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