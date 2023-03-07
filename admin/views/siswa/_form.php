<?php

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-form">
    <div class="row">

        <?php if (!Yii::$app->request->isAjax) { ?>
            <div class="card">
                <div class="card-body">



                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'id_user')->textInput() ?>


                    <div class="form-group mt-3">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>


                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        <?php } else { ?>

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'id_user')->textInput() ?>

            <?php if (!Yii::$app->request->isAjax) { ?>
                <div class="form-group mt-3">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            <?php } ?>
            <?php ActiveForm::end(); ?>
        <?php } ?>
    </div>
</div>