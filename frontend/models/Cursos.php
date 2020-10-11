<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $profesor_id
 * @property int|null $centro_educativo_id
 * @property int|null $active
 * @property string|null $date
 *
 * @property CentrosEducativos $centroEducativo
 * @property Profesores $profesor
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profesor_id', 'centro_educativo_id', 'active'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['centro_educativo_id'], 'exist', 'skipOnError' => true, 'targetClass' => CentrosEducativos::className(), 'targetAttribute' => ['centro_educativo_id' => 'id']],
            [['profesor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profesores::className(), 'targetAttribute' => ['profesor_id' => 'id']],
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
            'profesor_id' => 'Profesor ID',
            'centro_educativo_id' => 'Centro Educativo ID',
            'active' => 'Active',
            'date' => 'Date',
        ];
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

    /**
     * Gets query for [[Profesor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfesor()
    {
        return $this->hasOne(Profesores::className(), ['id' => 'profesor_id']);
    }
}
