<?php

use yii\db\Schema;
use yii\db\Migration;

class m180524_023657_event extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%event}}', [
            'Id' => $this->primaryKey(),
            'EtkinlikAd' => $this->string(200)->notNull(),
            'EtkinlikAciklama' => $this->text()->notNull(),
            'EtkinlikKontenjan' => $this->integer()->notNull(),
            'EtkinlikTarihi' => $this->datetime()->notNull(),
            'Adres' => $this->string(200)->notNull(),
            'OluşturanKişiId' => $this->integer()->notNull()


        ], $tableOptions);

        $this->createTable('{{%etkinlikuser}}', [
            'Id' => $this->primaryKey(),
            'EtkinlikId' => $this->integer()->notNull(),   
            'BaşvuranKişiId' => $this->integer()->notNull(),
            'BaşvuruTarihi' => $this->datetime()->notNull(),
            'Onay' => $this->boolean()->notNull()->defaultValue('0'),

        ], $tableOptions);

        $this->addForeignKey(
            'fk-etkinlikuser-event_id',
            'etkinlikuser',
            'EtkinlikId',
            'event',
            'Id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-etkinlikuser-user_id',
            'etkinlikuser',
            'BaşvuranKişiId',
            'user',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-event-user_id',
            'event',
            'OluşturanKişiId',
            'user',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-etkinlikuser-event_id',
            'etkinlikuser'
        );
        $this->dropForeignKey(
            'fk-etkinlikuser-user_id',
            'etkinlikuser'
        );
        $this->dropForeignKey(
            'fk-event-user_id',
            'event'
        );
        $this->dropTable('etkinlikuser');
        $this->dropTable('event');
    }
}
