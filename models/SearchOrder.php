<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * SearchOrder represents the model behind the search form of `app\models\Order`.
 */
class SearchOrder extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'show_id', 'ticket_count', 'status'], 'integer'],
            [['amount'], 'number'],
            [['date_created', 'confirmation_number', 'card_holder_name'], 'safe'],
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
        $query = Order::find();

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
            'user_id' => $this->user_id,
            'show_id' => $this->show_id,
            'ticket_count' => $this->ticket_count,
            'amount' => $this->amount,
            'date_created' => $this->date_created,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'confirmation_number', $this->confirmation_number])
            ->andFilterWhere(['like', 'card_holder_name', $this->card_holder_name]);

        return $dataProvider;
    }
}
