<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
  <div class="user-profile">
    <div class="row">
      <!-- user profile first-style start-->
      <div class="col-sm-12">
        <div class="card hovercard text-center mt-4">
          <div class="cardheader"></div>
          <div class="user-image">
            <div class="avatar"><img alt="" src="/frontend/web/images/logo-codinglab-2.png" data-intro="This is Profile image"></div>
          </div>


        </div>
        <br>
        <div class="container ">
          <div class="row d-flex justify-content-evenly">
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">

                  <!-- <div class="bg-gradient">
                    <svg class="site-resend-verification-email svg-fill">
                      <use href="../assetsTemplate/svg/icon-sprite.svg#customers"></use>
                    </svg>
                  </div> -->

                  <!-- <div class="card small-widget"> 
                    <div class="card-body primary"> <span class="f-light">New Orders</span>
                      <div class="d-flex align-items-end gap-1">
                        <h4>2,435</h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                      </div>
                      <div class="bg-gradient"> 
                        <svg class="stroke-icon svg-fill">
                          <use href="../assetsTemplate/svg/icon-sprite.svg#new-order"></use>
                        </svg>
                      </div>
                    </div>
                  </div> -->

                  <h6 class="f-w-500 f-light">Keuangan Stok</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">
                  <h6 class="f-w-500 f-light">Keuangan Jasa</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">
                  <h6 class="f-w-500 f-light">Keuangan Manufaktur</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
          </div>

          <div class="row d-flex justify-content-evenly">
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">
                  <h6 class="f-w-500 f-light">Keuangan Stok</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">
                  <h6 class="f-w-500 f-light">Keuangan Jasa</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
            <div class="col-sm-4">

              <div class="card o-hidden">             
                <div class="card-body balance-widget">
                  <h6 class="f-w-500 f-light">Keuangan Manufaktur</h6>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="f-light f-14 f-w-400 ms-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
                  </h4>
                  <a class="text-dark" href="#">Menuju Aplikasi <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>

            </div>  
          </div>

        </div>
      </div>
      <!-- user profile first-style end-->
    </div>
  </div>
</div>