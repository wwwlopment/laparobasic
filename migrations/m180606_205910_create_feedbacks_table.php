<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedbacks`.
 */
class m180606_205910_create_feedbacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedbacks', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'author' => $this->string(),
            'photo' => $this->string(),
            'text' => $this->text(),
            'publicate' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedbacks');
    }
}
