<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Fanlar;

/**
 * FanlarSearch represents the model behind the search form of `common\models\Fanlar`.
 */
class FanlarSearch extends Fanlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fan', 'malaka', 'reyting', 'ishfaol', 'rasm'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Fanlar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'fan', $this->fan])
            ->andFilterWhere(['like', 'malaka', $this->malaka])
            ->andFilterWhere(['like', 'reyting', $this->reyting])
            ->andFilterWhere(['like', 'ishfaol', $this->ishfaol])
            ->andFilterWhere(['like', 'rasm', $this->rasm]);

        return $dataProvider;
    }
}
