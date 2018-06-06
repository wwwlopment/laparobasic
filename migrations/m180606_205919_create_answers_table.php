<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answers`.
 */
class m180606_205919_create_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('answers', [
            'id' => $this->primaryKey(),
            'question_id' => $this->integer(),
            'date' => $this->date(),
            'author' => $this->string(),
            'answer' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('answers');
    }
}
