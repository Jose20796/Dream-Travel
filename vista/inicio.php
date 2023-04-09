<?php
require('layouts/header.php')
?>

    <div id="demo" class="carousel slide" data-ride="carousel" align="center" data-interval="3000">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../IMG/car4.jpg" alt="Carne asada 1" width="100%">
                <div class="carousel-caption">
                    <h1 style="text-align:center;font-size: 400%" ><b>Atención de primera</b></h1>
                    <p>&nbsp</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../IMG/car5.jpg" alt="Carne asada 2" width="100%">
                <div class="carousel-caption">
                    <h1 style="text-align:center; font-size: 400%" ><b>Los mejores precios</b></h1>
                    <p>&nbsp</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../IMG/car6.jpg" alt="Carne asada 3" width="100%">
                <div class="carousel-caption">
                    <h1 style="text-align:center; font-size: 400%" ><b>Disponibilidad inmediata</b></h1>
                    <p>&nbsp</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <br>
    <div class="row container">
        <div class="col-sm-1"></div>
        
        <div class="col-sm-6" align="center">
            <h1>Nuestra ubicación<img src="../IMG/lugar.png" alt="" width="30"></h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31840.897688341032!2d-79.234089184375!3d-3.997345999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cb4800193bdac5%3A0x892ab3a635bf81a6!2sDelgado%20Travel!5e0!3m2!1ses!2sec!4v1662753329786!5m2!1ses!2sec" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <h1>Sobre Nosotros</h1>
            <p>Disfruta del viaje de tus sueños junto a tu familia, amigos y pareja, con los mejores precios del mercado.
                Somos una de las mejores empresas de turismo a nivel nacional</p>

            <h1>Nuestras redes</h1>
            <img src="../IMG/insta.png" alt="" width="15%"><label>&nbsp;&nbsp;@dream.travel</label><br><br>
            <img src="../IMG/face.png" alt="" width="15%"><label>&nbsp;&nbsp;Dream Travel</label><br><br>
            <img src="../IMG/tiktok.png" alt="" width="15%"><label>&nbsp;&nbsp;@dreamtravel</label><br><br>
        </div>
    </div>
    
    <div class="modal" id="mostrar">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" >
                        <h4 class="modal-title" >Promoción</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" align="center" id="modalAct">
                        <img src="" id="imgPromo" alt="Promo" width="100%">
                    </div>

                    
                    </div>

                </div>
            </div>
        </div>
    
    
<?php
require('layouts/footer.php')
?>
