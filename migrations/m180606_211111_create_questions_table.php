<?php

use yii\db\Migration;

/**
 * Handles the creation of table `questions`.
 */
class m180606_211111_create_questions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('questions', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'author' => $this->string(),
            'title' => $this->string(),
            'answer' => $this->text(),
            'private' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('questions');
    }
}
