<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "regiones".
 *
 * @property int $id
 * @property string $name
 * @property int|null $zona_id
 * @property string|null $date
 *
 * @property Distritos[] $distritos
 * @property Zonas $zona
 */
class Regiones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regiones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['zona_id'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['zona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zonas::className(), 'targetAttribute' => ['zona_id' => 'id']],
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
            'zona_id' => 'Zona ID',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Distritos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistritos()
    {
        return $this->hasMany(Distritos::className(), ['region_id' => 'id']);
    }

    /**
     * Gets query for [[Zona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZona()
    {
        return $this->hasOne(Zonas::className(), ['id' => 'zona_id']);
    }
}
