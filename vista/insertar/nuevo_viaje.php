<?php
require('../vista/layouts/header.php')
?>

<div align="center">
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE DESTINO:" name="destino" id="destino"> <br>
    <input type="text" placeholder="INGRESE FECHA DE SALIDA:" name="fecha_salida" id="fecha_salida"> <br>
    <input type="text" placeholder="INGRESE FECHA DE REGRESO:" name="fecha_regreso" id="fecha_regreso"> <br>
    <input type="text" placeholder="INGRESE PRECIO:" name="precio" id="precio"> <br>
    <input type="text" placeholder="INGRESE IDCLIENTE:" name="idcliente"> <br>
    <input type="text" placeholder="INGRESE IDEMPLEADO:" name="idempleado"> <br>
    <input type="submit" class="btn-success" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>
</div>  

<?php
require('../vista/layouts/footer.php')
?>