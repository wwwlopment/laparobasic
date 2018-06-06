<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $reg_date
 * @property string $login
 * @property string $pass
 * @property string $photo
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $birthday
 * @property string $sex
 * @property int $active
 * @property int $is_admin
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_date', 'birthday'], 'safe'],
            [['active', 'is_admin'], 'integer'],
            [['login', 'pass', 'photo', 'name', 'surname', 'email', 'sex'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reg_date' => 'Reg Date',
            'login' => 'Login',
            'pass' => 'Pass',
            'photo' => 'Photo',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'active' => 'Active',
            'is_admin' => 'Is Admin',
        ];
    }
}
