<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tanimal".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_type_animal
 * @property int $old
 * @property string $name
 *
 * @property Ttypeanimal $typeAnimal
 * @property Tuser $user
 * @property Ttreatment[] $ttreatments
 */
class Tanimal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tanimal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_type_animal', 'old', 'name'], 'required'],
            [['id_user', 'id_type_animal', 'old'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_type_animal'], 'exist', 'skipOnError' => true, 'targetClass' => Ttypeanimal::className(), 'targetAttribute' => ['id_type_animal' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Tuser::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код животного',
            'id_user' => 'Код владельца',
            'id_type_animal' => 'Вид живтоного',
            'old' => 'Возраст',
            'name' => 'Кличка',
        ];
    }

    /**
     * Gets query for [[TypeAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeAnimal()
    {
        return $this->hasOne(Ttypeanimal::className(), ['id' => 'id_type_animal']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Tuser::className(), ['id' => 'id_user']);
    }

    /**
     * Gets query for [[Ttreatments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTtreatments()
    {
        return $this->hasMany(Ttreatment::className(), ['id_animal' => 'id']);
    }
}
