<?php
require('layouts/header.php')
?>

    <!---->
    <div class="container">
    <div class='container' align='center'>
    <h1> Listado de empleados </h1>
<table class='table table-hover'>
    <tr class="thead">
        <td>ID</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>CORREO</td>
        <td>TELÉFONO</td>
        <td>ACCIÓN</td>        
    </tr>
    <tbody class="tbody">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['idempleado'] ?> </td>
                        <td><?php echo $v['nombre'] ?> </td>
                        <td><?php echo $v['apellido'] ?> </td>
                        <td><?php echo $v['correo'] ?> </td>
                        <td><?php echo $v['telefono'] ?> </td>
                        <td>
                            <a class="btn btn-warning" href="../indexes/index_empleado.php?m=editar&id=<?php echo $v['idempleado']?>">EDITAR</a>
                            <a class="btn btn-danger" href="../indexes/index_empleado.php?m=eliminar&id=<?php echo $v['idempleado']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>

<div align="right">
  <a href="../indexes/index_empleado.php?m=nuevo" class="btn btn-success">NUEVO</a>
</div>
<br><br>
</div>
   
</div>

<?php
require('layouts/footer.php')
?>
