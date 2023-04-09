<?php
require('../vista/layouts/header.php')
?>
<div align="center">
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br>
    <input type="text" placeholder="INGRESE APELLIDO:" name="apellido"> <br>
    <input type="text" placeholder="INGRESE CORREO:" name="correo"> <br>
    <input type="text" placeholder="INGRESE TELÉFONO:" name="telefono"> <br>
    <input type="submit" class="btn-success" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>
</div>    

<?php
require('../vista/layouts/footer.php')
?>