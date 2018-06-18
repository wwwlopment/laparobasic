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
      [['login', 'email', 'pass', 'sex', 'name'], 'required', 'message'=>'Поле не може бути порожнім'],
      [['login'], 'trim'],
      [['login'], 'required'],
      [['login'], 'string', 'min' => 2, 'max' => 255],
      [['login'], 'unique', 'targetClass'=>'app\models\Users', 'targetAttribute'=>'login'],
      [['name'], 'string'],
      [['surname'], 'string'],
      [['birthday'], 'date'],
      [['sex'], 'string'],
      [['photo'], 'string'],
      [['email'], 'unique', 'targetClass'=>'app\models\Users', 'targetAttribute'=>'email', 'message'=>'Такий емейл вже був зареєстрований'],
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