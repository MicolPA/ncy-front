<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profesores".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $celular
 * @property int|null $curso_id
 * @property int|null $centro_educativo_id
 * @property int|null $active
 * @property string|null $date
 *
 * @property Cursos[] $cursos
 * @property CentrosEducativos $centroEducativo
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profesores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['curso_id', 'centro_educativo_id', 'active'], 'integer'],
            [['date'], 'safe'],
            [['nombre', 'apellido', 'celular'], 'string', 'max' => 255],
            [['centro_educativo_id'], 'exist', 'skipOnError' => true, 'targetClass' => CentrosEducativos::className(), 'targetAttribute' => ['centro_educativo_id' => 'id']],
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
            'celular' => 'Celular',
            'curso_id' => 'Curso ID',
            'centro_educativo_id' => 'Centro Educativo ID',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Cursos::className(), ['profesor_id' => 'id']);
    }

    /**
     * Gets query for [[CentroEducativo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCentroEducativo()
    {
        return $this->hasOne(CentrosEducativos::className(), ['id' => 'centro_educativo_id']);
    }
}
