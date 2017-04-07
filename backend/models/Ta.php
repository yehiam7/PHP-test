<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ta".
 *
 * @property integer $id
 * @property string $name
 * @property integer $password
 * @property double $gpa
 */
class Ta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password', 'gpa'], 'required'],
            [['password'], 'integer'],
            [['gpa'], 'number'],
            [['name'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'gpa' => 'Gpa',
        ];
    }
}
