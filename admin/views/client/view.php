<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Client */
?>
<div class="client-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_perusahaan',
            'nama_badan_usaha',
            'nama_owner',
            'alamat',
        ],
    ]) ?>

</div>
