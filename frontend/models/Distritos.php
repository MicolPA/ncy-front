<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "distritos".
 *
 * @property int $id
 * @property string $name
 * @property string|null $direccion
 * @property int|null $region_id
 * @property string|null $date
 *
 * @property CentrosEducativos[] $centrosEducativos
 * @property Regiones $region
 */
class Distritos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distritos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['direccion'], 'string'],
            [['region_id'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regiones::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'region_id' => 'Region ID',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[CentrosEducativos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCentrosEducativos()
    {
        return $this->hasMany(CentrosEducativos::className(), ['distrito_id' => 'id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regiones::className(), ['id' => 'region_id']);
    }
}
