<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "centros_educativos".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $direccion
 * @property string|null $telefono
 * @property int|null $private
 * @property int|null $distrito_id
 * @property int|null $active
 * @property string|null $date
 *
 * @property Distritos $distrito
 * @property Cursos[] $cursos
 * @property Profesores[] $profesores
 */
class CentrosEducativos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'centros_educativos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['direccion'], 'string'],
            [['private', 'distrito_id', 'active'], 'integer'],
            [['date'], 'safe'],
            [['name', 'telefono'], 'string', 'max' => 255],
            [['distrito_id'], 'exist', 'skipOnError' => true, 'targetClass' => Distritos::className(), 'targetAttribute' => ['distrito_id' => 'id']],
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'message',
                // 'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'private' => 'Private',
            'distrito_id' => 'Distrito ID',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Distrito]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrito()
    {
        return $this->hasOne(Distritos::className(), ['id' => 'distrito_id']);
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Cursos::className(), ['centro_educativo_id' => 'id']);
    }

    /**
     * Gets query for [[Profesores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfesores()
    {
        return $this->hasMany(Profesores::className(), ['centro_educativo_id' => 'id']);
    }
}
