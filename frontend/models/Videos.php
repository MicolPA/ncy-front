<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $url
 * @property int|null $curso_id
 * @property int|null $centro_educativo_id
 * @property string|null $date
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'string'],
            [['curso_id', 'centro_educativo_id'], 'integer'],
            [['date'], 'safe'],
            [['titulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'url' => 'Url',
            'curso_id' => 'Curso ID',
            'centro_educativo_id' => 'Centro Educativo ID',
            'date' => 'Date',
        ];
    }
}
