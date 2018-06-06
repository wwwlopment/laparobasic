<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180606_210431_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'reg_date' => $this->date(),
            'login' => $this->string(),
            'pass' => $this->string(),
            'photo' => $this->string(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'email' => $this->string(),
            'birthday' => $this->date(),
            'sex' => $this->string(),
            'active' => $this->boolean(),
            'is_admin' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
