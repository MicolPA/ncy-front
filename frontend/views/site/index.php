<?php

/* @var $this yii\web\View */

$this->title = 'Inicio';
use kartik\select2\Select2;
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .select2-selection, .select2-selection--single{
        height: 40px !important;
    }
    .select2-dropdown, .select2-dropdown--above{
        font-size: 22px;

    }
    .select2-container--default, .select2-selection--single, .select2-selection__rendered{
        line-height: 40px !important;
    }
</style>
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4" style="background-image: url(/frontend/web/images/stock-2.jpg)">
            <div class="col-lg-6 col-sm-12">
                <h3 class="">Centros Educativos </h3>
                <h2 class="text-white mb-4" style="-webkit-text-stroke-width:0px">Clases Online</h2>
                <p>Encuentra tu centro educativo y comienza a tomar tus clases online. Diariamente, trabajamos para sumar más centros educativos localizados en toda la República. Nuestra meta es lograr que todos los centros tengan un espacio diseñado para el aprendizaje de manera virtual.</p>
                <div class="mt-md-5 mt-4">
                    <a class="btn btn-primary btn-style mr-2 text-white" href="/frontend/web/clases-virtuales/direcciones-zonales"> Direcciones Zonales </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>

<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="images/about.jpg" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Nosotros</h5>
                    <!-- <audio autoplay controls><source src="http://162.210.196.142:22714/;.mp3/;stream.nsv" type="audio/mpeg"></source> -->
                    <h3 class="title-big">Contamos con una gran cantidad de escuelas en <span>todo el pais</span></h3>
                    <p class="mt-sm-4 mt-3">Diariamente, trabajamos para sumar más centros educativos localizados en toda la República. Nuestra meta es lograr que todos los centros tengan un espacio diseñado para el aprendizaje de manera virtual.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2 text-white" href="/frontend/web/clases-virtuales/direcciones-zonales"> Ver Centros Educativos </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<section class="w3_stats py-5" id="stats" style="background-image: url(/frontend/web/images/stock-2.png) !important">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-lg-5">
            <!-- <h6 class="title-small">Our facts</h6> -->
            <h3 class="title-big font-weight-bold" style="font-size: 4rem">Tenemos en nuestra plataforma</h3>
        </div>
        <div class="w3-stats">
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="counter text-center">
                        <i class="fab fa-youtube text-white fa-2x"></i>
                        <div class="timer count-title count-number mt-3 font-weight-bold" data-to="<?= $videos ?>" data-speed="1000"></div>
                        <p class="count-text font-weight-bold">Videos</p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="counter text-center">
                        <i class="fas fa-building text-white fa-2x"></i>
                        <div class="timer count-title count-number mt-3 font-weight-bold" data-to="<?= count($model) ?>" data-speed="1000"></div>
                        <p class="count-text font-weight-bold">Centros Educativos</p>
                    </div>
                </div>
                <div class="col-md-4 col-6 text-center">
                    <div class="counter">
                        <span class="fa fa-users text-white fa-2x"></span>
                        <div class="timer count-title count-number mt-3 font-weight-bold" data-to="<?= $alumnos ?>" data-speed="1000"></div>
                        <p class="count-text font-weight-bold">Alumnos</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <form action='/frontend/web/clases-virtuales/centros-educativos'  method="get">
                        <div class="title-content text-center mb-lg-5">
                            <h3 class="title-big font-weight-bold" style="font-size: 3rem">Encuentra tu Centro Educativo</h3>
                        </div>
                        <div class="input-group mb-3" style="font-size: 22px !important">
                            
                            <!-- <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"> -->

                            <select name="centro" id="centro" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                <?php foreach ($model as $c): ?>
                                    <option value="<?= $c->slug ?>"><?= $c->name ?></option>
                                <?php endforeach ?>
                            </select>
                            
                        </div>
                        <input type="submit" value="Buscar" class="btn btn-primary text-white pr-lg-5 pl-lg-5 mt-2" style="font-size:22px">

                    </form>
                </div>  
            </div>
        </div>
    </div>
</section>

<div class="middle py-5" id="call">
    <div class="container py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>Contamos con una gran cantidad de centros educativos en todo el pais; privados y públicos</h3>
            <!-- <h3 class="mt-4">Call us to order: <a href="tel:+1 123 456 789">+1 123 456 789</a> </h3> -->
            <a href="/frontend/web/clases-virtuales/direcciones-zonales" class="btn btn-style btn-primary mt-sm-5 mt-4 text-white">Encuentra tu Centro Educativo</a>
        </div>
    </div>
</div>
<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <form action='/frontend/web/clases-virtuales/centros-educativos'  method="get">
                        <div class="title-content text-center mb-lg-5">
                            <h3 class="title-big font-weight-bold" style="font-size: 3rem">Suscríbete a nuestro Canal de Youtube</h3>
                        </div>
                        <div class="input-group mb-3 text-center" style="font-size: 22px !important">
                            
                            <script src="https://apis.google.com/js/platform.js"></script>
                            <div class="g-ytsubscribe" data-channelid="UCv5BIlzG0AmEBQMf__ulM_Q" data-layout="full" data-count="default"></div>
                            
                        </div>

                    </form>
                </div>  
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout(function(){
        var script = document.createElement('script');
        script.onload = function () {
           $("#centro").select2();
        };
        script.src ="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js";

        document.head.appendChild(script);

        // <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js">
    },500)
</script>   
