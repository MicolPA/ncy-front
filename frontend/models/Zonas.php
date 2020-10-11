<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "zonas".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $date
 *
 * @property Regiones[] $regiones
 */
class Zonas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zonas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Regiones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegiones()
    {
        return $this->hasMany(Regiones::className(), ['zona_id' => 'id']);
    }
}
