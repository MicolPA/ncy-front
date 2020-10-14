<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property int|null $centro_educativo_id
 * @property int|null $curso_id
 * @property int|null $active
 * @property string|null $date
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['centro_educativo_id', 'curso_id', 'active'], 'integer'],
            [['date'], 'safe'],
            [['nombre', 'apellido'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'centro_educativo_id' => 'Centro Educativo ID',
            'curso_id' => 'Curso ID',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }
}
