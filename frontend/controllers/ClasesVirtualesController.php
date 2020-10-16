<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Zonas;
use frontend\models\Regiones;
use frontend\models\Distritos;
use frontend\models\Cursos;
use frontend\models\CentrosEducativos;

use yii\data\ActiveDataProvider;

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

        if (!$region or !$zona) {$this->redirect(['direcciones-zonales']);}

        $distritos = Distritos::find()->where(['region_id' => $region])->all();
        $centros = CentrosEducativos::find()->all();

        return $this->render('distritos', [
            'centros' => $centros,
            'distritos' => $distritos,
        ]);

    }


    public function actionSlug($slug){

        // $distritos = Distritos::find()->where(['region_id' => $region])->all();
        $model = CentrosEducativos::find()->where(['slug'=>$slug])->one();
        $cursos = Cursos::find()->where(['centro_educativo_id' => $model['id']])->all();
        $profesores = \frontend\models\Profesores::find()->where(['centro_educativo_id' => $model['id']])->one();
          
        return $this->render('centros-educativos', [
            'model' => $model,
            'cursos' => $cursos,
        ]);

    }

    public function actionCurso($curso){

        $curso = Cursos::find()->where(['slug'=>$curso])->one();
        $videos = \frontend\models\Videos::find()->where(['curso_id' => $curso])->all();
        $profesor = \frontend\models\Profesores::find()->where(['curso_id' => $curso])->one();
        $alumnos = \frontend\models\Alumnos::find()->where(['curso_id' => $curso])->all();
          
        return $this->render('cursos', [
            'curso' => $curso,
            'videos' => $videos,
            'alumnos' => $alumnos,
            'profesor' => $profesor,
        ]);

    }

    public function actionCentrosEducativos($centro){
        $this->redirect(["/clases-virtuales/$centro"]);
    }

}
