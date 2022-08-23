<?php

namespace app\models;

use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public static function tableName()
    {
        return 'messages';
    }

    public function attributeLabels()
    {
        return [
            "text" => "Сообщение"
        ];
    }

    public function rules()
    {
        return [["text", "required", "message" => "Поле не может быть пустым"]];
    }
}
