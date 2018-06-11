<?php

namespace app\models;

use yii\web\IdentityInterface;
use yii\db\ActiveRecord;

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
class Users extends ActiveRecord implements IdentityInterface {

  public $id;
  public $username;
  public $password;
  public $authKey;
  public $accessToken;

  private static $users = [
    '100' => [
      'id' => '100',
      'username' => 'admin',
      'password' => 'admin',
      'authKey' => 'test100key',
      'accessToken' => '100-token',
    ],
    '101' => [
      'id' => '101',
      'username' => 'demo',
      'password' => 'demo',
      'authKey' => 'test101key',
      'accessToken' => '101-token',
    ],
  ];
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        return null;
    }

  public function setPassword($pass) {
    //$this->pass = sha1($pass);
    $this->pass = $pass;
  }

  public function validatePassword ($pass) {

   // return $this->pass === sha1($pass);
    return $this->pass === $pass;
  }
   /**
     * {@inheritdoc}
     */
/*    public static function tableName()
    {
        return 'users';
    }*/

    /**
     * {@inheritdoc}
     */
 /*   public function rules()
    {
        return [
            [['reg_date', 'birthday'], 'safe'],
            [['active', 'is_admin'], 'integer'],
            [['login', 'pass', 'photo', 'name', 'surname', 'email', 'sex'], 'string', 'max' => 255],
        ];
    }*/

    /**
     * {@inheritdoc}
     */
/*    public function attributeLabels()
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
    }*/
/**/
  public function create() {
    return $this->save(false);
  }
  /**
   * Finds an identity by the given ID.
   * @param string|int $id the ID to be looked for
   * @return IdentityInterface the identity object that matches the given ID.
   * Null should be returned if such an identity cannot be found
   * or the identity is not in an active state (disabled, deleted, etc.)
   */
  public static function findIdentity($id) {
    // TODO: Implement findIdentity() method.
  }

  /**
   * Finds an identity by the given token.
   * @param mixed $token the token to be looked for
   * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
   * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
   * @return IdentityInterface the identity object that matches the given token.
   * Null should be returned if such an identity cannot be found
   * or the identity is not in an active state (disabled, deleted, etc.)
   */
  public static function findIdentityByAccessToken($token, $type = null) {
    // TODO: Implement findIdentityByAccessToken() method.
  }

  /**
   * Returns an ID that can uniquely identify a user identity.
   * @return string|int an ID that uniquely identifies a user identity.
   */
  public function getId() {
    // TODO: Implement getId() method.
  }

  /**
   * Returns a key that can be used to check the validity of a given identity ID.
   *
   * The key should be unique for each individual user, and should be persistent
   * so that it can be used to check the validity of the user identity.
   *
   * The space of such keys should be big enough to defeat potential identity attacks.
   *
   * This is required if [[User::enableAutoLogin]] is enabled.
   * @return string a key that is used to check the validity of a given identity ID.
   * @see validateAuthKey()
   */
  public function getAuthKey() {
    // TODO: Implement getAuthKey() method.
  }

  /**
   * Validates the given auth key.
   *
   * This is required if [[User::enableAutoLogin]] is enabled.
   * @param string $authKey the given auth key
   * @return bool whether the given auth key is valid.
   * @see getAuthKey()
   */
  public function validateAuthKey($authKey) {
    // TODO: Implement validateAuthKey() method.
  }
}
