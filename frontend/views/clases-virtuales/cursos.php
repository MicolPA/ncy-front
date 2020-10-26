<?php 

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = "Curso $curso->name - " . $curso->centroEducativo->name;
$this->params['breadcrumbs'][] = $this->title;
$tipo = $curso->centroEducativo->private == 1 ? "Privado" : "Público";
?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"><?= Html::encode($this->title) ?></h2>
        </div>
    </div>
</section>


<div class="container">
	<div class="row mt-5">
		<div class="col-md-8">
			<!-- <h1 class="title-big">Curso <span><?//= $curso->name ?></span></h1> -->

			<div class="w3l-menublock py-5">
			    <div id="w3l-menublock" class="text-center">
			        <div class="container">

			        	<input id="tab1" type="radio" name="tabs" checked>
			            <label class="tabtle" for="tab1">Información</label>

			            <input id="tab2" type="radio" name="tabs">
			            <label class="tabtle" for="tab2">Videos</label>

			            <section id="content1" class="tab-content text-left pt-3">
			             	<div class="mt-3 rounded p-4" style="background: #f2f3f4 !important">
				            	<p class="text-blue font-weight-bold mb-2">Información</p>

				            	<label class="font-weight-bold h5">Curso : </label>
				            	<span class="mb-2 mt-lg-0 mt-2 h5"><?= $curso->name ?></span> <br>

				            	<label class="font-weight-bold h5">Profesor(a): </label>
				            	<span class="mb-4 mt-lg-0 mt-2 h5"><?= isset($curso->profesor->nombre) ? $curso->profesor->nombre . " " . $curso->profesor->apellido : "No asignado"; ?></span><br>

				            	<label class="font-weight-bold h5">Centro Educativo : </label>
				            	<span class="mb-2 mt-lg-0 mt-2 h5"><?= $curso->centroEducativo->name . " ( $tipo )" ?></span> <br>

				            	<label class="font-weight-bold h5">Dirección : </label>
				            	<span class="mb-2 mt-lg-0 mt-2 h5"><?= $curso->centroEducativo->direccion ?></span> <br>

				            	<?php if (isset($curso->centroEducativo->distrito->region->zona->name) and isset($curso->centroEducativo->distrito->region->name) and isset($curso->centroEducativo->distrito->name)): ?>
				            		<label class="font-weight-bold h5">Zona/Región/Distrito : </label>
				            		<span class="mb-2 mt-lg-0 mt-2 h5"><?= $curso->centroEducativo->distrito->region->zona->name . "-" . $curso->centroEducativo->distrito->region->name . "-" . $curso->centroEducativo->distrito->name?></span> <br>
				            	<?php endif ?>

				            	
				            </div>

				            <div id="" class="tab-content text-left mt-4 p-0">

				            	<h3 class="h3 text-blue font-weight-bold">Alumnos</h3>

				                <div class="row">
				                	<?php foreach ($alumnos as $a): ?>
					            		<div class="col-md-6">
					            			<label class="h4 font-weight-normal">- <?= "$a->nombre $a->apellido" ?></label>
					            		</div>
					            	<?php endforeach ?>
				                </div>
				            </div>


			            </section>

			            
			            <section id="content2" class="tab-content text-left p-0">
			               <?php foreach ($videos as $v): ?>
			               	<div id="small-dialog" class="zoom-anim-dialog">
			               		<p class="h3 mt-3"><?= $v->titulo ?></p>
			               		<hr>
			                    <iframe src="<?= $v->url ?>" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
			                </div>
			               <?php endforeach ?>
			            </section>

			        </div>
			    </div>
			</div>
		</div>
		<div class="col-lg-4 cont-details">
	        <?= $this->render('/layouts/aside') ?>
	    </div>
	</div>
</div>
