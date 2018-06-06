<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photogalery`.
 */
class m180606_205709_create_photogalery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photogalery', [
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
        $this->dropTable('photogalery');
    }
}
