<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedbacks".
 *
 * @property int $id
 * @property string $date
 * @property string $author
 * @property string $photo
 * @property string $text
 * @property int $publicate
 */
class Feedbacks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['text'], 'string'],
            [['publicate'], 'integer'],
            [['author', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'author' => 'Author',
            'photo' => 'Photo',
            'text' => 'Text',
            'publicate' => 'Publicate',
        ];
    }
}
