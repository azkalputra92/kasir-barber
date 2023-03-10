<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string|null $nama_perusahaan
 * @property string|null $nama_badan_usaha
 * @property string|null $nama_owner
 * @property string|null $alamat
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_perusahaan', 'nama_badan_usaha', 'nama_owner', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_perusahaan' => 'Nama Perusahaan',
            'nama_badan_usaha' => 'Nama Badan Usaha',
            'nama_owner' => 'Nama Owner',
            'alamat' => 'Alamat',
        ];
    }
}
