<?php
namespace app\models;
use yii\db\ActiveRecord;

class Tasks extends ActiveRecord
{

    public function rules()
    {
        return [
            [['type', 'description', 'status'], 'required'],
        ];
    }

    public static function tableName()
    {
        return 'tasks';
    }

    public static function getAll()
    {
        $data = self::find()
            ->all();
        return $data;
    }

    public static function getOne($id)
    {
        $data = self::find()
            ->where(['id' => $id])
            ->one();
        return $data;
    }
}
