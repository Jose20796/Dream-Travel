<?php
require('layouts/header.php')
?>

<div class='container' align='center'>
    <h1> Listado de viajes </h1>
<table class='table table-hover'>
    <tr class="thead">
        <td>ID</td>
        <td>DESTINO</td>
        <td>FECHA DE SALIDA</td>
        <td>FECHA DE REGRESO</td>
        <td>PRECIO</td>
        <td>ID CLIENTE</td>
        <td>ID EMPLEADO</td>
        <td>ACCIÓN</td>   
    </tr>
    <tbody class="tbody">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['idviaje'] ?> </td>
                        <td><?php echo $v['destino'] ?> </td>
                        <td><?php echo $v['fecha_salida'] ?> </td>
                        <td><?php echo $v['fecha_regreso'] ?> </td>
                        <td><?php echo $v['precio'] ?> </td>
                        <td><?php echo $v['idcliente'] ?> </td>
                        <td><?php echo $v['idempleado'] ?> </td>
                        <td>
                            <a class="btn btn-warning" href="../indexes/index_viaje.php?m=editar&id=<?php echo $v['idviaje']?>">EDITAR</a>
                            <a class="btn btn-danger" href="../indexes/index_viaje.php?m=eliminar&id=<?php echo $v['idviaje']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
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
  <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-success">NUEVO</a>
</div>


<br><br>
</div>

    </div>

   
<?php
require('layouts/footer.php')
?>

