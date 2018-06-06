<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m180606_205622_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'date' => $this->date(),
            'title' => $this->string(),
            'image' => $this->string(),
            'title_image' => $this->string(),
            'text' => $this->text(),
            'teaser' => $this->string(),
            'publicate' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('content');
    }
}
