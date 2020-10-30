<?php 

use yii\helpers\Html;

$this->title = 'Direcciones Zonales';
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
                        <h3 class="title-big">Selecciona tu <span>zona</span></h3>
                        <p class="mb-4 mt-lg-0 mt-2">Selecciona tu zona y regional para encontrar los distritos que agrupan a los Centros Educativos.</p>
                        <div class="row">
                        	<?php foreach ($zonas as $z): ?>
                        		<div class="col-md-4">
	                        		<a class="no-link text-dark" href="javascript:obtenerRegiones(<?= $z->id ?>)">
	                        			<div class="card text-center font-weight-bold pt-3 pb-3 mb-3 outline-blue" id="<?= $z->id ?>">
			                        		ZONA <?= str_replace('ZONA', '', strtoupper($z->name)) ?>
			                        	</div>
	                        		</a>
	                        	</div>
                        	<?php endforeach ?>
                        </div>
                        <div class="regiones-d mt-lg-5" style="height: 80px"></div>
                        <div class="">
                        	<div class="mt-lg-5 regiones pt-lg-5" style="display: none">
                        		<h3 class="title-big">Selecciona una <span>Regional</span></h3>
                        	</div>
                        	<?php foreach ($regiones as $r): ?>
			                    <?php $count = \frontend\models\Distritos::find()->where(['region_id' => $r->id])->count(); ?>
			                    <?php $link = $count > 0 ? "/frontend/web/clases-virtuales/distritos?region=$r->id&zona=$r->zona_id" : '#nolink'; ?>
	                        	<div class="menu-item region-<?= $r->zona_id ?>" style="display: none">
		                            <a href="<?= $link ?>" class="no-link">
		                            	<div class="outline-red pt-2">
			                                <div class="row border-dot no-gutters">
			                                    <div class="col-8 menu-item-name">
			                                        <h6><span class="badge text-white mr-1 bg-primary"><i class="fas fa-chevron-circle-right"></i></span> Regional <?= $r->name ?></h6>
			                                    </div>
			                                    <div class="col-4 menu-item-price text-right">
			                                        <h6><?= $count ?> Distritos</h6>
			                                    </div>
			                                </div>
			                            </div>
		                            </a>
		                        </div>	
                        	<?php endforeach ?>
                        	
                        </div>

                    </div>
                    <div class="col-lg-4 cont-details">
                        <?= $this->render('/layouts/aside') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>