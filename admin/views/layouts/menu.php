 <?php

    use yii\bootstrap5\Html;
    ?>
 <ul class="sidebar-links" id="simple-bar">
     <li class="back-btn">
         <a href="index.html"><img class="img-fluid" src="../assetsTemplate/images/logo/logo-icon.png" alt="" /></a>
         <div class="mobile-back text-end">
             <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
         </div>
     </li>
     <li class="sidebar-main-title">
         <div>
             <h6 class="lan-1">Generall</h6>
         </div>
     </li>
     <li class="sidebar-list">
         <?= Html::a(
                '<svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-home"></use>
                                        </svg><span class="lan-3">Dashboard </span>',
                ['/site/index'],
                ['class' => 'sidebar-link']
            ) ?>
         <!-- <a class="sidebar-link" href="../site/index">
                                        <svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-home"></use>
                                        </svg><span class="lan-3">Dashboard </span></a> -->

     </li>

     <li class="sidebar-list">
         <?= html::a(
                '<svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-widget"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-widget"></use>
                                        </svg><span>Siswa</span>',
                ['/siswa/index'],
                ['class' => 'sidebar-link']
            ) ?>
     </li>

     <li class="sidebar-list">
         <?= html::a(
                '<svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-widget"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-widget"></use>
                                        </svg><span>Siswa Tema</span>',
                ['/siswa2/index'],
                ['class' => 'sidebar-link']
            ) ?>
     </li>
     <li class="sidebar-list">
         <?= html::a(
                '<svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-widget"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-widget"></use>
                                        </svg><span>Client</span>',
                ['/client/index'],
                ['class' => 'sidebar-link']
            ) ?>
     </li>


     <li class="sidebar-list">


         <?php if (Yii::$app->user->isGuest) { ?>
             <?php
                echo Html::a(
                    '<i class = "fas fa-sign-out-alt "></i> Login',
                    ['/site/login'],
                    //     '<svg class="stroke-icon">
                    //     <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                    // </svg>
                    // <svg class="fill-icon">
                    //     <use href="../assetsTemplate/svg/icon-sprite.svg#fill-home"></use>
                    // </svg><span>Logout </span>',
                    ['class' => 'sidebar-link']
                );

                ?>
         <?php  } else { ?>
             <a class="sidebar-link">
                 <?php
                    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'sidebar-link']);
                    echo Html::submitButton(
                        '<i class = "fas fa-sign-out-alt "></i> Logout (' . Yii::$app->user->identity->username . ')',
                        //     '<svg class="stroke-icon">
                        //     <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                        // </svg>
                        // <svg class="fill-icon">
                        //     <use href="../assetsTemplate/svg/icon-sprite.svg#fill-home"></use>
                        // </svg><span>Logout </span>',
                        ['class' => 'btn btn-outline-primary ']
                    );
                    echo Html::endForm();
                    ?>
             <?php } ?>

             </a>

     </li>



 </ul>