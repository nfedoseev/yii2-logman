<?php

namespace nfedoseev\yii2\logman\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use nfedoseev\yii2\logman\models\LogmanRequests;

/**
 * LogmanRequestsSearch represents the model behind the search form about `nfedoseev\yii2\logman\models\LogmanRequests`.
 */
class LogmanRequestsSearch extends LogmanRequests
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'user_id'], 'integer'],
            [['tag', 'url', 'site', 'time', 'method', 'user_ip'], 'safe'],
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
        $query = LogmanRequests::find();

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
            'time' => $this->time,
            'status' => $this->status,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'method', $this->method])
            ->andFilterWhere(['like', 'user_ip', $this->user_ip]);

        return $dataProvider;
    }
}
