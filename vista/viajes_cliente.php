<?php
require('layouts/header.php')
?>

    <div class="container" align="center">
        <h1>Selecciona un destino</h1>
        <div class="row">
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/cancun.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Cancún</h4>
                      <p class="card-text">$200/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/tokyo.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Tokyo</h4>
                      <p class="card-text">$300/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/miami.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Miami</h4>
                      <p class="card-text">$149/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                      
                    </div>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/buenosaires.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Buenos Aires</h4>
                      <p class="card-text">149/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/barcelona.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Barcelona</h4>
                      <p class="card-text">$249/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 py-4">
                <div class="card" style="width:350px">
                    <img class="card-img-top" src="../IMG/roma.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Roma</h4>
                      <p class="card-text">$349/día</p>
                      <a href="../indexes/index_viaje.php?m=nuevo" class="btn btn-primary">Solicitar Viaje</a>
                    </div>
                  </div>
            </div>
        </div>
        <hr>

    </div>
    
    <div class="modal" id="modal1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" >
                        <h4 class="modal-title" >Solicitud de viaje</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" align="center" id="modalAct">
                        <form>
                        <div class="row">
                            <div class="col-sm-6 py-6">
                                <label>Destino:</label>
                            </div>
                            <div class="col-sm-6 py-6">
                                <input type="text" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 py-6">
                                <label>Fecha de salida:</label>
                            </div>
                            <div class="col-sm-6 py-6">
                                <input type="text"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 py-6">
                                <label>Fecha de regreso:</label>
                            </div>
                            <div class="col-sm-6 py-6">
                                <input type="text"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 py-6">
                                <label>Precio: $</label>
                            </div>
                            <div class="col-sm-6 py-6">
                                <input type="text"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 py-6">
                                <label>Guía:</label>
                            </div>
                            <div class="col-sm-6 py-6">
                                <input type="text"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 py-12">
                                <input type="submit" class="btn btn-success" name="btn" value="ACEPTAR" data-dismiss="modal">
                            </div>
                        </div>
                        </form>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Registrarse</button>
                    </div>
                    </div>

                </div>
            </div>
        </div>

     
    
    
    
<?php
require('layouts/footer.php')
?>
