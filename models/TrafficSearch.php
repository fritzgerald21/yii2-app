<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Traffic;

/**
 * TrafficSearch represents the model behind the search form about `app\models\Traffic`.
 */
class TrafficSearch extends Traffic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'traffic'], 'integer'],
            [['week', 'whenSubmitted'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Traffic::find();

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
            'week' => $this->week,
            'traffic' => $this->traffic,
            'whenSubmitted' => $this->whenSubmitted,
        ]);

        return $dataProvider;
    }
}
