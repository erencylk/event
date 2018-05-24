<?php

namespace kouosl\event\models;

use Yii;

/**
 * This is the model class for table "etkinlikuser".
 *
 * @property int $Id
 * @property int $EtkinlikId
 * @property int $BaşvuranKişiId
 * @property string $BaşvuruTarihi
 * @property int $Onay
 *
 * @property Event $etkinlik
 * @property User $başvuranKişi
 */
class Etkinlikuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etkinlikuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EtkinlikId', 'BaşvuranKişiId', 'BaşvuruTarihi'], 'required'],
            [['EtkinlikId', 'BaşvuranKişiId'], 'integer'],
            [['BaşvuruTarihi'], 'safe'],
            [['Onay'], 'string', 'max' => 1],
            [['EtkinlikId'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['EtkinlikId' => 'Id']],
            [['BaşvuranKişiId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['BaşvuranKişiId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'EtkinlikId' => 'Etkinlik ID',
            'BaşvuranKişiId' => 'Başvuran Kişi ID',
            'BaşvuruTarihi' => 'Başvuru Tarihi',
            'Onay' => 'Onay',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtkinlik()
    {
        return $this->hasOne(Event::className(), ['Id' => 'EtkinlikId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaşvuranKişi()
    {
        return $this->hasOne(User::className(), ['id' => 'BaşvuranKişiId']);
    }
}
