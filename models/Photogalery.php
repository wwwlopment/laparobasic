<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photogalery".
 *
 * @property int $id
 * @property int $category_id
 * @property string $date
 * @property string $title
 * @property string $text
 * @property string $link
 * @property int $publicate
 */
class Photogalery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photogalery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'publicate'], 'integer'],
            [['date'], 'safe'],
            [['text'], 'string'],
            [['title', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'date' => 'Date',
            'title' => 'Title',
            'text' => 'Text',
            'link' => 'Link',
            'publicate' => 'Publicate',
        ];
    }
}
