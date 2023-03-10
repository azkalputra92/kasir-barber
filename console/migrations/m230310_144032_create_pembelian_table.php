<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pembelian}}`.
 */
class m230310_144032_create_pembelian_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pembelian}}', [
            'id' => $this->primaryKey(),
            'nama_pelanggan' => $this->string(),
            'no_pelanggan' => $this->string(),
            'umur' => $this->integer(),
            'id_karyawan' => $this->integer(),
            'total_harga' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
        $this->createTable('{{%pembelian_detail}}', [
            'id' => $this->primaryKey(),
            'id_pembelian' => $this->integer(),
            'jenis_pembelian' => $this->string(),
            'id_paket_pelayanan' => $this->integer(),
            'nama_paket_pelayanan' => $this->string(),
            'harga' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pembelian}}');
    }
}
