<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property int $category_id
 * @property string $date
 * @property string $title
 * @property string $image
 * @property string $title_image
 * @property string $text
 * @property string $teaser
 * @property int $publicate
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
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
            [['title', 'image', 'title_image', 'teaser'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'title_image' => 'Title Image',
            'text' => 'Text',
            'teaser' => 'Teaser',
            'publicate' => 'Publicate',
        ];
    }
}
