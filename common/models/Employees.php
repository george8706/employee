<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $grouup
 * @property string $dateofbirth
 * @property string $isworking
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dateofbirth'], 'safe'],
            [['firstname', 'lastname', 'grouup'], 'string', 'max' => 100],
            [['isworking'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'grouup' => 'Grouup',
            'dateofbirth' => 'Dateofbirth',
            'isworking' => 'Isworking',
        ];
    }
}
