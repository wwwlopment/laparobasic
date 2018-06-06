<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Feedbacks;

/**
 * FeedbacksSearch represents the model behind the search form of `app\models\Feedbacks`.
 */
class FeedbacksSearch extends Feedbacks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'publicate'], 'integer'],
            [['date', 'author', 'photo', 'text'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Feedbacks::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'publicate' => $this->publicate,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
