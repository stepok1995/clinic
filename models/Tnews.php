<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tnews".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $date
 */
class Tnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tnews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'date'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код новости',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'date' => 'Дата',
        ];
    }
}
