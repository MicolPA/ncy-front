<?php 

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"><?= Html::encode($this->title) ?></h2>
        </div>
    </div>
</section>

<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <div class="">
                        	<div class="regiones">
                        		<h3 class="title-big">Selecciona tu <span>curso</span></h3>
                        		<p class="mb-4 mt-lg-0 mt-2">Selecciona tu curso y comienza tu clases.</p>
                        	</div>
                        	<?php foreach ($cursos as $c): ?>
	                        	<div class="menu-item region-">
		                            <a href="/frontend/web/clases-virtuales/curso/<?= $c->slug ?>" class="no-link">
		                            	<div class="outline-red pt-2">
			                                <div class="row border-dot no-gutters">
			                                    <div class="col-6 menu-item-name">
			                                        <h6><span class="badge text-white mr-1 bg-primary"><i class="fas fa-chevron-circle-right"></i></span> Curso <?= $c->name ?></h6>
			                                    </div>
			                                    <div class="col-6 menu-item-price text-right">
			                                        <h6>Profesor(a) <?= isset($c->profesor->nombre) ? $c->profesor->nombre . " " . $c->profesor->apellido : "No asignado"; ?> </h6>
			                                    </div>
			                                </div>
			                            </div>
		                            </a>
		                        </div>	
                        	<?php endforeach ?>
                        	
                        </div>

                    </div>
                    <div class="col-lg-4 cont-details">
                        <?= $this->render('/layouts/aside', ['anuncios' => $anuncios]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
