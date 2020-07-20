<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ttreatment".
 *
 * @property int $id
 * @property int $id_animal
 * @property int $id_service
 * @property string $date
 *
 * @property Tprice $service
 * @property Tanimal $animal
 */
class Ttreatment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ttreatment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_animal', 'id_service', 'date'], 'required'],
            [['id_animal', 'id_service'], 'integer'],
            [['date'], 'safe'],
            [['id_service'], 'exist', 'skipOnError' => true, 'targetClass' => Tprice::className(), 'targetAttribute' => ['id_service' => 'id']],
            [['id_animal'], 'exist', 'skipOnError' => true, 'targetClass' => Tanimal::className(), 'targetAttribute' => ['id_animal' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код лечебной процедуры',
            'id_animal' => 'Код животного',
            'id_service' => 'Код услуги',
            'date' => 'Дата проведения',
        ];
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Tprice::className(), ['id' => 'id_service']);
    }

    /**
     * Gets query for [[Animal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Tanimal::className(), ['id' => 'id_animal']);
    }
}
