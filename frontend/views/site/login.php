<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
?>
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">    
            <div class="login-card">
                <div>
                    <div >
                        <div class="row">
                            <div class="col-5 d-flex justify-content-end">
                                <img class="img-fluid mb-3" src="/frontend/web/images/logo-codinglab.png">
                            </div>
                            <div class="col-7">
                                <h6 class="">APLIKASI KEUANGAN</h6>
                                <p class="">CODINGLAB.ID</p>
                            </div>
                        </div> 
                    </div>
                    <div class="login-main"> 
                        <h4 class="text-center">Selamat Datang</h4>
                        <p class="text-center">Gunakan ID Pengguna dan Sandi untuk masuk</p>

                        <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'theme-form']); ?>
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Masukkan ID anda'])->label('ID Pengguna') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput()->label('Kata Sandi') ?>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'rememberMe')->checkbox()->label('Ingat Saya') ?>
                                </div>
                                <div class="col-md-6 text-end">
                                    <?= Html::a('Lupa Sandi?', ['site/request-password-reset']) ?>
                                </div>
                            </div>     
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary mt--2 btn-block w-100', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                        <p class="mt-5 text-center mb-0">
                            Belum memiliki Akun?<a class="ms-2" href="sign-up.html">Hubungi Admin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
