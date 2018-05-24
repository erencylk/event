<?php

namespace kouosl\event\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $Id
 * @property string $EtkinlikAd
 * @property string $EtkinlikAciklama
 * @property int $EtkinlikKontenjan
 * @property string $EtkinlikTarihi
 * @property string $Adres
 * @property int $OluşturanKişiId
 *
 * @property Etkinlikuser[] $etkinlikusers
 * @property User $oluşturanKişi
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EtkinlikAd', 'EtkinlikAciklama', 'EtkinlikKontenjan', 'EtkinlikTarihi', 'Adres', 'OluşturanKişiId'], 'required'],
            [['EtkinlikAciklama'], 'string'],
            [['EtkinlikKontenjan', 'OluşturanKişiId'], 'integer'],
            [['EtkinlikTarihi'], 'safe'],
            [['EtkinlikAd', 'Adres'], 'string', 'max' => 200],
            [['OluşturanKişiId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['OluşturanKişiId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'EtkinlikAd' => 'Etkinlik Ad',
            'EtkinlikAciklama' => 'Etkinlik Aciklama',
            'EtkinlikKontenjan' => 'Etkinlik Kontenjan',
            'EtkinlikTarihi' => 'Etkinlik Tarihi',
            'Adres' => 'Adres',
            'OluşturanKişiId' => 'Oluşturan Kişi ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtkinlikusers()
    {
        return $this->hasMany(Etkinlikuser::className(), ['EtkinlikId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOluşturanKişi()
    {
        return $this->hasOne(User::className(), ['id' => 'OluşturanKişiId']);
    }
}
