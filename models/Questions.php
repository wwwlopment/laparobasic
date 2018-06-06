<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property string $date
 * @property string $author
 * @property string $title
 * @property string $answer
 * @property int $private
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['answer'], 'string'],
            [['private'], 'integer'],
            [['author', 'title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'answer' => 'Answer',
            'private' => 'Private',
        ];
    }
}
