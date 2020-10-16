<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '¿Quienes Somos?';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"><?= Html::encode($this->title) ?></h2>
        </div>
    </div>
</section>

<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="/frontend/web/images/stock.jpg" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1 text-blue">Nosotros</h5>
                    <!-- <audio autoplay controls><source src="http://162.210.196.142:22714/;.mp3/;stream.nsv" type="audio/mpeg"></source> -->
                    <h3 class="title-big">Contamos con una gran cantidad de escuelas en <span>todo el pais</span></h3>
                    <p class="mt-sm-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, consequatur voluptatem ad.</p>
                    <p class="mt-sm-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, consequatur voluptatem ad.</p>
                    
                </div>
            </div>

            <div class="row">
            	<div class="col-md-12">
            		<!-- <h2>Visi</h2> -->
            	</div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-reasons py-5" id="how">
    <div class="main-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <!-- <h6 class="title-small">Our process</h6> -->
                <!-- <h3 class="title-big">How We Work</h3> -->
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-6 col-sm-6 grids-feature">
                    <a href="#url" class="icon"><span class="fas fa-building text-blue fa-2x"></span></a>
                    <h4><a href="#feature" class="title-head">Visión</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque consequatur placeat ullam maiores suscipit laborum ipsum eius iure ipsam quas earum eligendi qui quod doloribus, eveniet inventore nesciunt? Nam, culpa.</p>
                </div>
                <div class="col-lg-6 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-users text-blue fa-2x"></span></a>
                    <h4><a href="#feature" class="title-head">Misión</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque consequatur placeat ullam maiores suscipit laborum ipsum eius iure ipsam quas earum eligendi qui quod doloribus, eveniet inventore nesciunt? Nam, culpa.</p>
                </div>
            </div>
        </div>
    </div>
</section>