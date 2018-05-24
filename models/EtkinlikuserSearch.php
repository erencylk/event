<?php

namespace kouosl\event\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\event\models\Etkinlikuser;

/**
 * EtkinlikuserSearch represents the model behind the search form of `kouosl\event\models\Etkinlikuser`.
 */
class EtkinlikuserSearch extends Etkinlikuser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'EtkinlikId', 'BaşvuranKişiId'], 'integer'],
            [['BaşvuruTarihi', 'Onay'], 'safe'],
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
        $query = Etkinlikuser::find();

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
            'Id' => $this->Id,
            'EtkinlikId' => $this->EtkinlikId,
            'BaşvuranKişiId' => $this->BaşvuranKişiId,
            'BaşvuruTarihi' => $this->BaşvuruTarihi,
        ]);

        $query->andFilterWhere(['like', 'Onay', $this->Onay]);

        return $dataProvider;
    }
}
