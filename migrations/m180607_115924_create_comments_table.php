<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180607_115924_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'content_id' => $this->integer(),
            'user_id' => $this->integer(),
            'date' => $this->date(),
            'text' => $this->text(),
            'publicate' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
