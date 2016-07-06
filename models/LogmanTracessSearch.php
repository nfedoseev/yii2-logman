<?php

namespace nfedoseev\yii2\logman\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use nfedoseev\yii2\logman\models\LogmanTraces;

/**
 * LogmanTracessSearch represents the model behind the search form about `nfedoseev\yii2\logman\models\LogmanTraces`.
 */
class LogmanTracessSearch extends LogmanTraces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'line', 'level'], 'integer'],
            [['request_tag', 'message', 'message_full', 'message_short', 'message_all', 'file', 'additional', 'category', 'time', 'traces'], 'safe'],
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
        $query = LogmanTraces::find();

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
            'line' => $this->line,
            'level' => $this->level,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'request_tag', $this->request_tag])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'message_full', $this->message_full])
            ->andFilterWhere(['like', 'message_short', $this->message_short])
            ->andFilterWhere(['like', 'message_all', $this->message_all])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'additional', $this->additional])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'traces', $this->traces]);

        return $dataProvider;
    }
}
