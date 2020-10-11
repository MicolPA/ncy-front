<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctanos';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--/header-->
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
                        <h3 class="title-big">Contáctanos</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'enableClientScript' => false]); ?>
                            <div class="form-grid">
                                <?= $form->field($model, 'name')->textInput(['class' => '', 'placeholder' => 'Nombre', 'required' => 'required'])->label(false) ?>

                                <?= $form->field($model, 'email')->textInput(['class' => '', 'placeholder' => 'Email', 'required' => 'required'])->label(false) ?>
                            </div>
                            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'class' => '', 'placeholder' => 'Mensaje', 'required' => 'required'])->label(false) ?>
                            <div class="text-right">
                                <?= Html::submitButton('Enviar Mensaje', ['class' => 'btn btn-primary text-white', 'name' => 'contact-button',]) ?>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="mt-md-5 mt-4">Información de contacto</h5>
                            <p><span class="fa fa-map-marker"></span>Mi dirección, #001</p>
                            <p> <a href="mailto:contacto@ncy1.com"><span
                                        class="fa fa-envelope"></span>contacto@ncy1.com</a></p>
                            <p><span class="fa fa-phone"></span> 809-608-0454</p>
                            <p><span class="fa fa-phone"></span> 829-568-3217</p>

                            <!-- <h5 class="mt-4 mb-3">Opening Hours</h5> -->
                            <!-- <div class="hours">
                                <p><span class="fa fa-clock-o"></span>10:00am - 09:00pm</p>
                                <p>Sunday Closed</p>
                            </div> -->
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

