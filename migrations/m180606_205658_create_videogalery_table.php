<?php

use yii\db\Migration;

/**
 * Handles the creation of table `videogalery`.
 */
class m180606_205658_create_videogalery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('videogalery', [
          'id' => $this->primaryKey(),
          'category_id' => $this->integer(),
          'date' => $this->date(),
          'title' => $this->string(),
          'text' => $this->text(),
          'link' => $this->string(),
          'publicate' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('videogalery');
    }
}
