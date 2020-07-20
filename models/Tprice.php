<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tprice".
 *
 * @property int $id
 * @property string $name_service
 * @property int $price
 *
 * @property Ttreatment[] $ttreatments
 */
class Tprice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tprice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_service', 'price'], 'required'],
            [['price'], 'integer'],
            [['name_service'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код услуги',
            'name_service' => 'Наименование услуги',
            'price' => 'Стоимость',
        ];
    }

    /**
     * Gets query for [[Ttreatments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTtreatments()
    {
        return $this->hasMany(Ttreatment::className(), ['id_service' => 'id']);
    }
}
