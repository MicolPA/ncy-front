<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "anuncios".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $url
 * @property int|null $tipo
 * @property int|null $active
 * @property string|null $date
 */
class Anuncios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anuncios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'string'],
            [['tipo', 'active'], 'integer'],
            [['date'], 'safe'],
            [['nombre'], 'string', 'max' => 255],
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
            'url' => 'Url',
            'tipo' => 'Tipo',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }
}
