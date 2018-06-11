<?php


namespace app\models;


use yii\base\Model;

class SignupForm extends Model {

  public $login;
  public $email;
  public $pass;
  public $name;
  public $surname;
  public $birthday;
  public $sex;
  public $photo;


  public function rules() {
    return [
      [['login', 'email', 'pass', 'sex', 'name'], 'required'],
      [['login'], 'string'],
      [['name'], 'string'],
      [['surname'], 'string'],
      [['birthday'], 'date'],
      [['sex'], 'string'],
      [['photo'], 'string'],
      [['email'], 'unique', 'targetClass'=>'app\models\Users', 'targetAttribute'=>'email'],
    ];
  }

  public function signup() {
    if ($this->validate()) {
      $user = new Users();
      $user->attributes = $this->attributes;
      return $user->create();
    }
  }

}