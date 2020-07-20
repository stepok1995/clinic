<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuser".
 *
 * @property int $id
 * @property string $family
 * @property string $name
 * @property string $second_name
 * @property string $login
 * @property string $password
 * @property string $phone_nubmber
 * @property string $adress
 *
 * @property Tanimal[] $tanimals
 */
class Tuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['family', 'name', 'second_name', 'login', 'password', 'phone_nubmber', 'adress'], 'required'],
            [['family', 'name', 'second_name', 'login', 'password', 'phone_nubmber', 'adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код пользователя',
            'family' => 'Фамилия',
            'name' => 'Имя',
            'second_name' => 'Отчество',
            'login' => 'Логин',
            'password' => 'Пароль',
            'phone_nubmber' => 'Моб. номер',
            'adress' => 'Адрес',
        ];
    }

    /**
     * Gets query for [[Tanimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTanimals()
    {
        return $this->hasMany(Tanimal::className(), ['id_user' => 'id']);
    }
}
