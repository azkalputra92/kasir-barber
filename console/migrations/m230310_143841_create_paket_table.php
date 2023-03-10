<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%paket}}`.
 */
class m230310_143841_create_paket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%paket}}', [
            'id' => $this->primaryKey(),
            'nama_paket' => $this->string(),
            'harga' => $this->integer(),
        ]);
        $this->createTable('{{%paket_detail}}', [
            'id' => $this->primaryKey(),
            'id_paket' => $this->integer(),
            'id_pelayanan' => $this->integer(),
            'nama_pelayanan' => $this->string(),
            'harga' => $this->integer(),
        ]);
        $this->createTable('{{%pelayanan}}', [
            'id' => $this->primaryKey(),
            'nama_pelayanan' => $this->string(),
            'harga' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%paket}}');
    }
}
