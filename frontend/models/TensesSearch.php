<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tenses;

/**
 * TensesSearch represents the model behind the search form about `frontend\models\Tenses`.
 */
class TensesSearch extends Tenses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['english', 'infinitiv', 'presens', 'preteritum', 'supinum', 'imperativ'], 'safe'],
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
        $query = Tenses::find();

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
        ]);

        $query->andFilterWhere(['like', 'english', $this->english])
            ->andFilterWhere(['like', 'infinitiv', $this->infinitiv])
            ->andFilterWhere(['like', 'presens', $this->presens])
            ->andFilterWhere(['like', 'preteritum', $this->preteritum])
            ->andFilterWhere(['like', 'supinum', $this->supinum])
            ->andFilterWhere(['like', 'imperativ', $this->imperativ]);

        return $dataProvider;
    }
}
