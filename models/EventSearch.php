<?php

namespace kouosl\event\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\event\models\Event;

/**
 * EventSearch represents the model behind the search form of `kouosl\event\models\Event`.
 */
class EventSearch extends Event
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'EtkinlikKontenjan', 'OluşturanKişiId'], 'integer'],
            [['EtkinlikAd', 'EtkinlikAciklama', 'EtkinlikTarihi', 'Adres'], 'safe'],
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
        $query = Event::find();

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
            'EtkinlikKontenjan' => $this->EtkinlikKontenjan,
            'EtkinlikTarihi' => $this->EtkinlikTarihi,
            'OluşturanKişiId' => $this->OluşturanKişiId,
        ]);

        $query->andFilterWhere(['like', 'EtkinlikAd', $this->EtkinlikAd])
            ->andFilterWhere(['like', 'EtkinlikAciklama', $this->EtkinlikAciklama])
            ->andFilterWhere(['like', 'Adres', $this->Adres]);

        return $dataProvider;
    }
}
