<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TaiKhoan;

/**
 * TaiKhoanSearch represents the model behind the search form about `app\models\TaiKhoan`.
 */
class TaiKhoanSearch extends TaiKhoan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ma_tk'], 'integer'],
            [['ten_tk'], 'safe'],
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
        $query = TaiKhoan::find();

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
            'ma_tk' => $this->ma_tk,
        ]);

        $query->andFilterWhere(['like', 'ten_tk', $this->ten_tk]);

        return $dataProvider;
    }
}
