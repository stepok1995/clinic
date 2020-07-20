<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ttypeanimal".
 *
 * @property int $id
 * @property string $name
 *
 * @property Tanimal[] $tanimals
 */
class Ttypeanimal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ttypeanimal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код животного',
            'name' => 'Наименование вида',
        ];
    }

    /**
     * Gets query for [[Tanimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTanimals()
    {
        return $this->hasMany(Tanimal::className(), ['id_type_animal' => 'id']);
    }
}
