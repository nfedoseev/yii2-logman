<?php

namespace nfedoseev\yii2\logman\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use nfedoseev\yii2\logman\models\LogmanExceptions;

/**
 * LogmanExceptionSearch represents the model behind the search form about `nfedoseev\yii2\logman\models\LogmanExceptions`.
 */
class LogmanExceptionSearch extends LogmanExceptions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'line_number'], 'integer'],
            [['tag', 'class', 'error_group', 'file_name', 'message'], 'safe'],
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
        $query = LogmanExceptions::find();

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
            'line_number' => $this->line_number,
        ]);

        $query->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'error_group', $this->error_group])
            ->andFilterWhere(['like', 'file_name', $this->file_name])
            ->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
