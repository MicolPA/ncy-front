<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Zonas;
use frontend\models\Regiones;
use frontend\models\Distritos;

class ClasesVirtualesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDireccionesZonales(){
    	$zonas = Zonas::find()->all();
    	$regiones = Regiones::find()->all();

    	return $this->render('direcciones-zonales', [
            'zonas' => $zonas,
            'regiones' => $regiones,
        ]);

    }

    public function actionDistritos($region=null, $zona=null){

        $distritos = Distritos::find()->where(['region_id' => $region])->all();

        return $this->render('distritos', [
            'distritos' => $distritos,
        ]);

    }

}
