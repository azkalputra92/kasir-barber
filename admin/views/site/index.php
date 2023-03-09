<?php

use kartik\grid\GridView;
use yii\bootstrap5\Html;

// use kartik\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-xxl-5 col-ed-6 col-xl-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card course-box">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon">
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#course-1"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">100+</h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light" href="learning-list-view.html">View course<span class="ms-2">
                                                <svg class="fill-icon f-light">
                                                    <use href="../assetsTemplate/svg/icon-sprite.svg#arrowright"></use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card course-box">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon">
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#course-1"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">100+</h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light" href="learning-list-view.html">View course<span class="ms-2">
                                                <svg class="fill-icon f-light">
                                                    <use href="../assets/svg/icon-sprite.svg#arrowright"></use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card course-box">
                            <div class="card-body">
                                <div class="course-widget">
                                    <div class="course-icon">
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#course-1"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">100+</h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light" href="learning-list-view.html">View course<span class="ms-2">
                                                <svg class="fill-icon f-light">
                                                    <use href="../assets/svg/icon-sprite.svg#arrowright"></use>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="square-group">
                                <li class="square-1 warning"></li>
                                <li class="square-1 primary"></li>
                                <li class="square-2 warning1"></li>
                                <li class="square-3 danger"></li>
                                <li class="square-4 light"></li>
                                <li class="square-5 warning"></li>
                                <li class="square-6 success"></li>
                                <li class="square-7 success"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-lg-12 box-col-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Views</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="viewButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Today</button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="viewButton" style=""><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row m-0 overall-card">
                            <div class="col-xl-9 col-md-12 col-sm-7 p-0">
                                <div class="chart-right">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <ul class="balance-data">
                                                    <li><span class="circle bg-warning"> </span><span class="f-light ms-1">Earning</span></li>
                                                    <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Expense</span></li>
                                                </ul>
                                                <div class="current-sale-container">
                                                    <div id="chart-currently" style="min-height: 305px;">
                                                        <div id="apexchartszojyqct5h" class="apexcharts-canvas apexchartszojyqct5h apexcharts-theme-light" style="width: 647px; height: 290px;"><svg id="SvgjsSvg3945" width="647" height="290" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                <g id="SvgjsG3947" class="apexcharts-inner apexcharts-graphical" transform="translate(54.140625, 30)">
                                                                    <defs id="SvgjsDefs3946">
                                                                        <linearGradient id="SvgjsLinearGradient3951" x1="0" y1="0" x2="0" y2="1">
                                                                            <stop id="SvgjsStop3952" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                                            <stop id="SvgjsStop3953" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                            <stop id="SvgjsStop3954" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                        </linearGradient>
                                                                        <clipPath id="gridRectMaskzojyqct5h">
                                                                            <rect id="SvgjsRect3956" width="588.859375" height="224.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMaskzojyqct5h"></clipPath>
                                                                        <clipPath id="nonForecastMaskzojyqct5h"></clipPath>
                                                                        <clipPath id="gridRectMarkerMaskzojyqct5h">
                                                                            <rect id="SvgjsRect3957" width="586.859375" height="226.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <filter id="SvgjsFilter3964" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood3965" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood3965Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite3966" in="SvgjsFeFlood3965Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3966Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset3967" dx="0" dy="8" result="SvgjsFeOffset3967Out" in="SvgjsFeComposite3966Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur3968" stdDeviation="10 " result="SvgjsFeGaussianBlur3968Out" in="SvgjsFeOffset3967Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge3969" result="SvgjsFeMerge3969Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode3970" in="SvgjsFeGaussianBlur3968Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode3971" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend3972" in="SourceGraphic" in2="SvgjsFeMerge3969Out" mode="normal" result="SvgjsFeBlend3972Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter3975" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood3976" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood3976Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite3977" in="SvgjsFeFlood3976Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3977Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset3978" dx="0" dy="8" result="SvgjsFeOffset3978Out" in="SvgjsFeComposite3977Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur3979" stdDeviation="10 " result="SvgjsFeGaussianBlur3979Out" in="SvgjsFeOffset3978Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge3980" result="SvgjsFeMerge3980Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode3981" in="SvgjsFeGaussianBlur3979Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode3982" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend3983" in="SourceGraphic" in2="SvgjsFeMerge3980Out" mode="normal" result="SvgjsFeBlend3983Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter3986" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood3987" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood3987Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite3988" in="SvgjsFeFlood3987Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3988Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset3989" dx="0" dy="8" result="SvgjsFeOffset3989Out" in="SvgjsFeComposite3988Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur3990" stdDeviation="10 " result="SvgjsFeGaussianBlur3990Out" in="SvgjsFeOffset3989Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge3991" result="SvgjsFeMerge3991Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode3992" in="SvgjsFeGaussianBlur3990Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode3993" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend3994" in="SourceGraphic" in2="SvgjsFeMerge3991Out" mode="normal" result="SvgjsFeBlend3994Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter3997" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood3998" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood3998Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite3999" in="SvgjsFeFlood3998Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3999Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4000" dx="0" dy="8" result="SvgjsFeOffset4000Out" in="SvgjsFeComposite3999Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4001" stdDeviation="10 " result="SvgjsFeGaussianBlur4001Out" in="SvgjsFeOffset4000Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4002" result="SvgjsFeMerge4002Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4003" in="SvgjsFeGaussianBlur4001Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4004" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4005" in="SourceGraphic" in2="SvgjsFeMerge4002Out" mode="normal" result="SvgjsFeBlend4005Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4008" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4009" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4009Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4010" in="SvgjsFeFlood4009Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4010Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4011" dx="0" dy="8" result="SvgjsFeOffset4011Out" in="SvgjsFeComposite4010Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4012" stdDeviation="10 " result="SvgjsFeGaussianBlur4012Out" in="SvgjsFeOffset4011Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4013" result="SvgjsFeMerge4013Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4014" in="SvgjsFeGaussianBlur4012Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4015" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4016" in="SourceGraphic" in2="SvgjsFeMerge4013Out" mode="normal" result="SvgjsFeBlend4016Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4019" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4020" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4020Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4021" in="SvgjsFeFlood4020Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4021Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4022" dx="0" dy="8" result="SvgjsFeOffset4022Out" in="SvgjsFeComposite4021Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4023" stdDeviation="10 " result="SvgjsFeGaussianBlur4023Out" in="SvgjsFeOffset4022Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4024" result="SvgjsFeMerge4024Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4025" in="SvgjsFeGaussianBlur4023Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4026" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4027" in="SourceGraphic" in2="SvgjsFeMerge4024Out" mode="normal" result="SvgjsFeBlend4027Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4030" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4031" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4031Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4032" in="SvgjsFeFlood4031Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4032Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4033" dx="0" dy="8" result="SvgjsFeOffset4033Out" in="SvgjsFeComposite4032Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4034" stdDeviation="10 " result="SvgjsFeGaussianBlur4034Out" in="SvgjsFeOffset4033Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4035" result="SvgjsFeMerge4035Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4036" in="SvgjsFeGaussianBlur4034Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4037" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4038" in="SourceGraphic" in2="SvgjsFeMerge4035Out" mode="normal" result="SvgjsFeBlend4038Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4041" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4042" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4042Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4043" in="SvgjsFeFlood4042Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4043Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4044" dx="0" dy="8" result="SvgjsFeOffset4044Out" in="SvgjsFeComposite4043Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4045" stdDeviation="10 " result="SvgjsFeGaussianBlur4045Out" in="SvgjsFeOffset4044Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4046" result="SvgjsFeMerge4046Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4047" in="SvgjsFeGaussianBlur4045Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4048" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4049" in="SourceGraphic" in2="SvgjsFeMerge4046Out" mode="normal" result="SvgjsFeBlend4049Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4052" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4053" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4053Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4054" in="SvgjsFeFlood4053Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4054Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4055" dx="0" dy="8" result="SvgjsFeOffset4055Out" in="SvgjsFeComposite4054Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4056" stdDeviation="10 " result="SvgjsFeGaussianBlur4056Out" in="SvgjsFeOffset4055Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4057" result="SvgjsFeMerge4057Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4058" in="SvgjsFeGaussianBlur4056Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4059" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4060" in="SourceGraphic" in2="SvgjsFeMerge4057Out" mode="normal" result="SvgjsFeBlend4060Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4063" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4064" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4064Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4065" in="SvgjsFeFlood4064Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4065Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4066" dx="0" dy="8" result="SvgjsFeOffset4066Out" in="SvgjsFeComposite4065Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4067" stdDeviation="10 " result="SvgjsFeGaussianBlur4067Out" in="SvgjsFeOffset4066Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4068" result="SvgjsFeMerge4068Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4069" in="SvgjsFeGaussianBlur4067Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4070" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4071" in="SourceGraphic" in2="SvgjsFeMerge4068Out" mode="normal" result="SvgjsFeBlend4071Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4074" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4075" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4075Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4076" in="SvgjsFeFlood4075Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4076Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4077" dx="0" dy="8" result="SvgjsFeOffset4077Out" in="SvgjsFeComposite4076Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4078" stdDeviation="10 " result="SvgjsFeGaussianBlur4078Out" in="SvgjsFeOffset4077Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4079" result="SvgjsFeMerge4079Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4080" in="SvgjsFeGaussianBlur4078Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4081" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4082" in="SourceGraphic" in2="SvgjsFeMerge4079Out" mode="normal" result="SvgjsFeBlend4082Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4085" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4086" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4086Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4087" in="SvgjsFeFlood4086Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4087Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4088" dx="0" dy="8" result="SvgjsFeOffset4088Out" in="SvgjsFeComposite4087Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4089" stdDeviation="10 " result="SvgjsFeGaussianBlur4089Out" in="SvgjsFeOffset4088Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4090" result="SvgjsFeMerge4090Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4091" in="SvgjsFeGaussianBlur4089Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4092" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4093" in="SourceGraphic" in2="SvgjsFeMerge4090Out" mode="normal" result="SvgjsFeBlend4093Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4096" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4097" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4097Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4098" in="SvgjsFeFlood4097Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4098Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4099" dx="0" dy="8" result="SvgjsFeOffset4099Out" in="SvgjsFeComposite4098Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4100" stdDeviation="10 " result="SvgjsFeGaussianBlur4100Out" in="SvgjsFeOffset4099Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4101" result="SvgjsFeMerge4101Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4102" in="SvgjsFeGaussianBlur4100Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4103" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4104" in="SourceGraphic" in2="SvgjsFeMerge4101Out" mode="normal" result="SvgjsFeBlend4104Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4107" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4108" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4108Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4109" in="SvgjsFeFlood4108Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4109Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4110" dx="0" dy="8" result="SvgjsFeOffset4110Out" in="SvgjsFeComposite4109Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4111" stdDeviation="10 " result="SvgjsFeGaussianBlur4111Out" in="SvgjsFeOffset4110Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4112" result="SvgjsFeMerge4112Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4113" in="SvgjsFeGaussianBlur4111Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4114" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4115" in="SourceGraphic" in2="SvgjsFeMerge4112Out" mode="normal" result="SvgjsFeBlend4115Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4118" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4119" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4119Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4120" in="SvgjsFeFlood4119Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4120Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4121" dx="0" dy="8" result="SvgjsFeOffset4121Out" in="SvgjsFeComposite4120Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4122" stdDeviation="10 " result="SvgjsFeGaussianBlur4122Out" in="SvgjsFeOffset4121Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4123" result="SvgjsFeMerge4123Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4124" in="SvgjsFeGaussianBlur4122Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4125" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4126" in="SourceGraphic" in2="SvgjsFeMerge4123Out" mode="normal" result="SvgjsFeBlend4126Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4129" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4130" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4130Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4131" in="SvgjsFeFlood4130Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4131Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4132" dx="0" dy="8" result="SvgjsFeOffset4132Out" in="SvgjsFeComposite4131Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4133" stdDeviation="10 " result="SvgjsFeGaussianBlur4133Out" in="SvgjsFeOffset4132Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4134" result="SvgjsFeMerge4134Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4135" in="SvgjsFeGaussianBlur4133Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4136" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4137" in="SourceGraphic" in2="SvgjsFeMerge4134Out" mode="normal" result="SvgjsFeBlend4137Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4140" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4141" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4141Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4142" in="SvgjsFeFlood4141Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4142Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4143" dx="0" dy="8" result="SvgjsFeOffset4143Out" in="SvgjsFeComposite4142Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4144" stdDeviation="10 " result="SvgjsFeGaussianBlur4144Out" in="SvgjsFeOffset4143Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4145" result="SvgjsFeMerge4145Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4146" in="SvgjsFeGaussianBlur4144Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4147" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4148" in="SourceGraphic" in2="SvgjsFeMerge4145Out" mode="normal" result="SvgjsFeBlend4148Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4151" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4152" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4152Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4153" in="SvgjsFeFlood4152Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4153Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4154" dx="0" dy="8" result="SvgjsFeOffset4154Out" in="SvgjsFeComposite4153Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4155" stdDeviation="10 " result="SvgjsFeGaussianBlur4155Out" in="SvgjsFeOffset4154Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4156" result="SvgjsFeMerge4156Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4157" in="SvgjsFeGaussianBlur4155Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4158" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4159" in="SourceGraphic" in2="SvgjsFeMerge4156Out" mode="normal" result="SvgjsFeBlend4159Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4162" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4163" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4163Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4164" in="SvgjsFeFlood4163Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4164Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4165" dx="0" dy="8" result="SvgjsFeOffset4165Out" in="SvgjsFeComposite4164Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4166" stdDeviation="10 " result="SvgjsFeGaussianBlur4166Out" in="SvgjsFeOffset4165Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4167" result="SvgjsFeMerge4167Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4168" in="SvgjsFeGaussianBlur4166Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4169" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4170" in="SourceGraphic" in2="SvgjsFeMerge4167Out" mode="normal" result="SvgjsFeBlend4170Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4173" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4174" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4174Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4175" in="SvgjsFeFlood4174Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4175Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4176" dx="0" dy="8" result="SvgjsFeOffset4176Out" in="SvgjsFeComposite4175Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4177" stdDeviation="10 " result="SvgjsFeGaussianBlur4177Out" in="SvgjsFeOffset4176Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4178" result="SvgjsFeMerge4178Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4179" in="SvgjsFeGaussianBlur4177Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4180" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4181" in="SourceGraphic" in2="SvgjsFeMerge4178Out" mode="normal" result="SvgjsFeBlend4181Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4184" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4185" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4185Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4186" in="SvgjsFeFlood4185Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4186Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4187" dx="0" dy="8" result="SvgjsFeOffset4187Out" in="SvgjsFeComposite4186Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4188" stdDeviation="10 " result="SvgjsFeGaussianBlur4188Out" in="SvgjsFeOffset4187Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4189" result="SvgjsFeMerge4189Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4190" in="SvgjsFeGaussianBlur4188Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4191" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4192" in="SourceGraphic" in2="SvgjsFeMerge4189Out" mode="normal" result="SvgjsFeBlend4192Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4198" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4199" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4199Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4200" in="SvgjsFeFlood4199Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4200Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4201" dx="0" dy="8" result="SvgjsFeOffset4201Out" in="SvgjsFeComposite4200Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4202" stdDeviation="10 " result="SvgjsFeGaussianBlur4202Out" in="SvgjsFeOffset4201Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4203" result="SvgjsFeMerge4203Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4204" in="SvgjsFeGaussianBlur4202Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4205" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4206" in="SourceGraphic" in2="SvgjsFeMerge4203Out" mode="normal" result="SvgjsFeBlend4206Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4209" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4210" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4210Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4211" in="SvgjsFeFlood4210Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4211Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4212" dx="0" dy="8" result="SvgjsFeOffset4212Out" in="SvgjsFeComposite4211Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4213" stdDeviation="10 " result="SvgjsFeGaussianBlur4213Out" in="SvgjsFeOffset4212Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4214" result="SvgjsFeMerge4214Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4215" in="SvgjsFeGaussianBlur4213Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4216" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4217" in="SourceGraphic" in2="SvgjsFeMerge4214Out" mode="normal" result="SvgjsFeBlend4217Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4220" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4221" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4221Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4222" in="SvgjsFeFlood4221Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4222Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4223" dx="0" dy="8" result="SvgjsFeOffset4223Out" in="SvgjsFeComposite4222Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4224" stdDeviation="10 " result="SvgjsFeGaussianBlur4224Out" in="SvgjsFeOffset4223Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4225" result="SvgjsFeMerge4225Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4226" in="SvgjsFeGaussianBlur4224Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4227" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4228" in="SourceGraphic" in2="SvgjsFeMerge4225Out" mode="normal" result="SvgjsFeBlend4228Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4231" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4232" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4232Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4233" in="SvgjsFeFlood4232Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4233Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4234" dx="0" dy="8" result="SvgjsFeOffset4234Out" in="SvgjsFeComposite4233Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4235" stdDeviation="10 " result="SvgjsFeGaussianBlur4235Out" in="SvgjsFeOffset4234Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4236" result="SvgjsFeMerge4236Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4237" in="SvgjsFeGaussianBlur4235Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4238" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4239" in="SourceGraphic" in2="SvgjsFeMerge4236Out" mode="normal" result="SvgjsFeBlend4239Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4242" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4243" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4243Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4244" in="SvgjsFeFlood4243Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4244Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4245" dx="0" dy="8" result="SvgjsFeOffset4245Out" in="SvgjsFeComposite4244Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4246" stdDeviation="10 " result="SvgjsFeGaussianBlur4246Out" in="SvgjsFeOffset4245Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4247" result="SvgjsFeMerge4247Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4248" in="SvgjsFeGaussianBlur4246Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4249" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4250" in="SourceGraphic" in2="SvgjsFeMerge4247Out" mode="normal" result="SvgjsFeBlend4250Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4253" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4254" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4254Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4255" in="SvgjsFeFlood4254Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4255Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4256" dx="0" dy="8" result="SvgjsFeOffset4256Out" in="SvgjsFeComposite4255Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4257" stdDeviation="10 " result="SvgjsFeGaussianBlur4257Out" in="SvgjsFeOffset4256Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4258" result="SvgjsFeMerge4258Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4259" in="SvgjsFeGaussianBlur4257Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4260" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4261" in="SourceGraphic" in2="SvgjsFeMerge4258Out" mode="normal" result="SvgjsFeBlend4261Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4264" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4265" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4265Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4266" in="SvgjsFeFlood4265Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4266Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4267" dx="0" dy="8" result="SvgjsFeOffset4267Out" in="SvgjsFeComposite4266Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4268" stdDeviation="10 " result="SvgjsFeGaussianBlur4268Out" in="SvgjsFeOffset4267Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4269" result="SvgjsFeMerge4269Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4270" in="SvgjsFeGaussianBlur4268Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4271" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4272" in="SourceGraphic" in2="SvgjsFeMerge4269Out" mode="normal" result="SvgjsFeBlend4272Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4275" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4276" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4276Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4277" in="SvgjsFeFlood4276Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4277Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4278" dx="0" dy="8" result="SvgjsFeOffset4278Out" in="SvgjsFeComposite4277Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4279" stdDeviation="10 " result="SvgjsFeGaussianBlur4279Out" in="SvgjsFeOffset4278Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4280" result="SvgjsFeMerge4280Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4281" in="SvgjsFeGaussianBlur4279Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4282" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4283" in="SourceGraphic" in2="SvgjsFeMerge4280Out" mode="normal" result="SvgjsFeBlend4283Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4286" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4287" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4287Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4288" in="SvgjsFeFlood4287Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4288Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4289" dx="0" dy="8" result="SvgjsFeOffset4289Out" in="SvgjsFeComposite4288Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4290" stdDeviation="10 " result="SvgjsFeGaussianBlur4290Out" in="SvgjsFeOffset4289Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4291" result="SvgjsFeMerge4291Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4292" in="SvgjsFeGaussianBlur4290Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4293" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4294" in="SourceGraphic" in2="SvgjsFeMerge4291Out" mode="normal" result="SvgjsFeBlend4294Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4297" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4298" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4298Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4299" in="SvgjsFeFlood4298Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4299Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4300" dx="0" dy="8" result="SvgjsFeOffset4300Out" in="SvgjsFeComposite4299Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4301" stdDeviation="10 " result="SvgjsFeGaussianBlur4301Out" in="SvgjsFeOffset4300Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4302" result="SvgjsFeMerge4302Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4303" in="SvgjsFeGaussianBlur4301Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4304" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4305" in="SourceGraphic" in2="SvgjsFeMerge4302Out" mode="normal" result="SvgjsFeBlend4305Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4308" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4309" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4309Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4310" in="SvgjsFeFlood4309Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4310Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4311" dx="0" dy="8" result="SvgjsFeOffset4311Out" in="SvgjsFeComposite4310Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4312" stdDeviation="10 " result="SvgjsFeGaussianBlur4312Out" in="SvgjsFeOffset4311Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4313" result="SvgjsFeMerge4313Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4314" in="SvgjsFeGaussianBlur4312Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4315" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4316" in="SourceGraphic" in2="SvgjsFeMerge4313Out" mode="normal" result="SvgjsFeBlend4316Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4319" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4320" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4320Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4321" in="SvgjsFeFlood4320Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4321Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4322" dx="0" dy="8" result="SvgjsFeOffset4322Out" in="SvgjsFeComposite4321Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4323" stdDeviation="10 " result="SvgjsFeGaussianBlur4323Out" in="SvgjsFeOffset4322Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4324" result="SvgjsFeMerge4324Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4325" in="SvgjsFeGaussianBlur4323Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4326" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4327" in="SourceGraphic" in2="SvgjsFeMerge4324Out" mode="normal" result="SvgjsFeBlend4327Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4330" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4331" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4331Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4332" in="SvgjsFeFlood4331Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4332Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4333" dx="0" dy="8" result="SvgjsFeOffset4333Out" in="SvgjsFeComposite4332Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4334" stdDeviation="10 " result="SvgjsFeGaussianBlur4334Out" in="SvgjsFeOffset4333Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4335" result="SvgjsFeMerge4335Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4336" in="SvgjsFeGaussianBlur4334Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4337" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4338" in="SourceGraphic" in2="SvgjsFeMerge4335Out" mode="normal" result="SvgjsFeBlend4338Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4341" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4342" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4342Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4343" in="SvgjsFeFlood4342Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4343Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4344" dx="0" dy="8" result="SvgjsFeOffset4344Out" in="SvgjsFeComposite4343Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4345" stdDeviation="10 " result="SvgjsFeGaussianBlur4345Out" in="SvgjsFeOffset4344Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4346" result="SvgjsFeMerge4346Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4347" in="SvgjsFeGaussianBlur4345Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4348" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4349" in="SourceGraphic" in2="SvgjsFeMerge4346Out" mode="normal" result="SvgjsFeBlend4349Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4352" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4353" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4353Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4354" in="SvgjsFeFlood4353Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4354Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4355" dx="0" dy="8" result="SvgjsFeOffset4355Out" in="SvgjsFeComposite4354Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4356" stdDeviation="10 " result="SvgjsFeGaussianBlur4356Out" in="SvgjsFeOffset4355Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4357" result="SvgjsFeMerge4357Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4358" in="SvgjsFeGaussianBlur4356Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4359" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4360" in="SourceGraphic" in2="SvgjsFeMerge4357Out" mode="normal" result="SvgjsFeBlend4360Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4363" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4364" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4364Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4365" in="SvgjsFeFlood4364Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4365Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4366" dx="0" dy="8" result="SvgjsFeOffset4366Out" in="SvgjsFeComposite4365Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4367" stdDeviation="10 " result="SvgjsFeGaussianBlur4367Out" in="SvgjsFeOffset4366Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4368" result="SvgjsFeMerge4368Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4369" in="SvgjsFeGaussianBlur4367Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4370" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4371" in="SourceGraphic" in2="SvgjsFeMerge4368Out" mode="normal" result="SvgjsFeBlend4371Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4374" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4375" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4375Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4376" in="SvgjsFeFlood4375Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4376Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4377" dx="0" dy="8" result="SvgjsFeOffset4377Out" in="SvgjsFeComposite4376Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4378" stdDeviation="10 " result="SvgjsFeGaussianBlur4378Out" in="SvgjsFeOffset4377Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4379" result="SvgjsFeMerge4379Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4380" in="SvgjsFeGaussianBlur4378Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4381" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4382" in="SourceGraphic" in2="SvgjsFeMerge4379Out" mode="normal" result="SvgjsFeBlend4382Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4385" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4386" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4386Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4387" in="SvgjsFeFlood4386Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4387Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4388" dx="0" dy="8" result="SvgjsFeOffset4388Out" in="SvgjsFeComposite4387Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4389" stdDeviation="10 " result="SvgjsFeGaussianBlur4389Out" in="SvgjsFeOffset4388Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4390" result="SvgjsFeMerge4390Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4391" in="SvgjsFeGaussianBlur4389Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4392" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4393" in="SourceGraphic" in2="SvgjsFeMerge4390Out" mode="normal" result="SvgjsFeBlend4393Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4396" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4397" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4397Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4398" in="SvgjsFeFlood4397Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4398Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4399" dx="0" dy="8" result="SvgjsFeOffset4399Out" in="SvgjsFeComposite4398Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4400" stdDeviation="10 " result="SvgjsFeGaussianBlur4400Out" in="SvgjsFeOffset4399Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4401" result="SvgjsFeMerge4401Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4402" in="SvgjsFeGaussianBlur4400Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4403" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4404" in="SourceGraphic" in2="SvgjsFeMerge4401Out" mode="normal" result="SvgjsFeBlend4404Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4407" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4408" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4408Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4409" in="SvgjsFeFlood4408Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4409Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4410" dx="0" dy="8" result="SvgjsFeOffset4410Out" in="SvgjsFeComposite4409Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4411" stdDeviation="10 " result="SvgjsFeGaussianBlur4411Out" in="SvgjsFeOffset4410Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4412" result="SvgjsFeMerge4412Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4413" in="SvgjsFeGaussianBlur4411Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4414" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4415" in="SourceGraphic" in2="SvgjsFeMerge4412Out" mode="normal" result="SvgjsFeBlend4415Out"></feBlend>
                                                                        </filter>
                                                                        <filter id="SvgjsFilter4418" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                            <feFlood id="SvgjsFeFlood4419" flood-color="#7064f5" flood-opacity="0.1" result="SvgjsFeFlood4419Out" in="SourceGraphic"></feFlood>
                                                                            <feComposite id="SvgjsFeComposite4420" in="SvgjsFeFlood4419Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4420Out"></feComposite>
                                                                            <feOffset id="SvgjsFeOffset4421" dx="0" dy="8" result="SvgjsFeOffset4421Out" in="SvgjsFeComposite4420Out"></feOffset>
                                                                            <feGaussianBlur id="SvgjsFeGaussianBlur4422" stdDeviation="10 " result="SvgjsFeGaussianBlur4422Out" in="SvgjsFeOffset4421Out"></feGaussianBlur>
                                                                            <feMerge id="SvgjsFeMerge4423" result="SvgjsFeMerge4423Out" in="SourceGraphic">
                                                                                <feMergeNode id="SvgjsFeMergeNode4424" in="SvgjsFeGaussianBlur4422Out"></feMergeNode>
                                                                                <feMergeNode id="SvgjsFeMergeNode4425" in="[object Arguments]"></feMergeNode>
                                                                            </feMerge>
                                                                            <feBlend id="SvgjsFeBlend4426" in="SourceGraphic" in2="SvgjsFeMerge4423Out" mode="normal" result="SvgjsFeBlend4426Out"></feBlend>
                                                                        </filter>
                                                                    </defs>
                                                                    <rect id="SvgjsRect3955" width="6.938802083333332" height="222.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3951)" class="apexcharts-xcrosshairs" y2="222.348" filter="none" fill-opacity="0.9"></rect>
                                                                    <g id="SvgjsG4437" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                        <g id="SvgjsG4438" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText4440" font-family="Rubik, sans-serif" x="13.877604166666666" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4441">1</tspan>
                                                                                <title>1</title>
                                                                            </text><text id="SvgjsText4443" font-family="Rubik, sans-serif" x="41.6328125" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4444">2</tspan>
                                                                                <title>2</title>
                                                                            </text><text id="SvgjsText4446" font-family="Rubik, sans-serif" x="69.38802083333333" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4447">3</tspan>
                                                                                <title>3</title>
                                                                            </text><text id="SvgjsText4449" font-family="Rubik, sans-serif" x="97.14322916666666" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4450">4</tspan>
                                                                                <title>4</title>
                                                                            </text><text id="SvgjsText4452" font-family="Rubik, sans-serif" x="124.89843749999999" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4453">5</tspan>
                                                                                <title>5</title>
                                                                            </text><text id="SvgjsText4455" font-family="Rubik, sans-serif" x="152.65364583333334" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4456">6</tspan>
                                                                                <title>6</title>
                                                                            </text><text id="SvgjsText4458" font-family="Rubik, sans-serif" x="180.40885416666669" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4459">7</tspan>
                                                                                <title>7</title>
                                                                            </text><text id="SvgjsText4461" font-family="Rubik, sans-serif" x="208.16406250000003" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4462">8</tspan>
                                                                                <title>8</title>
                                                                            </text><text id="SvgjsText4464" font-family="Rubik, sans-serif" x="235.91927083333337" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4465">9</tspan>
                                                                                <title>9</title>
                                                                            </text><text id="SvgjsText4467" font-family="Rubik, sans-serif" x="263.6744791666667" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4468">10</tspan>
                                                                                <title>10</title>
                                                                            </text><text id="SvgjsText4470" font-family="Rubik, sans-serif" x="291.4296875" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4471">11</tspan>
                                                                                <title>11</title>
                                                                            </text><text id="SvgjsText4473" font-family="Rubik, sans-serif" x="319.1848958333333" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4474">12</tspan>
                                                                                <title>12</title>
                                                                            </text><text id="SvgjsText4476" font-family="Rubik, sans-serif" x="346.94010416666663" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4477">13</tspan>
                                                                                <title>13</title>
                                                                            </text><text id="SvgjsText4479" font-family="Rubik, sans-serif" x="374.69531249999994" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4480">14</tspan>
                                                                                <title>14</title>
                                                                            </text><text id="SvgjsText4482" font-family="Rubik, sans-serif" x="402.45052083333326" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4483">15</tspan>
                                                                                <title>15</title>
                                                                            </text><text id="SvgjsText4485" font-family="Rubik, sans-serif" x="430.2057291666666" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4486">16</tspan>
                                                                                <title>16</title>
                                                                            </text><text id="SvgjsText4488" font-family="Rubik, sans-serif" x="457.9609374999999" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4489">17</tspan>
                                                                                <title>17</title>
                                                                            </text><text id="SvgjsText4491" font-family="Rubik, sans-serif" x="485.7161458333332" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4492">18</tspan>
                                                                                <title>18</title>
                                                                            </text><text id="SvgjsText4494" font-family="Rubik, sans-serif" x="513.4713541666666" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4495">19</tspan>
                                                                                <title>19</title>
                                                                            </text><text id="SvgjsText4497" font-family="Rubik, sans-serif" x="541.2265625" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4498">20</tspan>
                                                                                <title>20</title>
                                                                            </text><text id="SvgjsText4500" font-family="Rubik, sans-serif" x="568.9817708333334" y="251.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Rubik, sans-serif;">
                                                                                <tspan id="SvgjsTspan4501">21</tspan>
                                                                                <title>21</title>
                                                                            </text></g>
                                                                    </g>
                                                                    <g id="SvgjsG4427" class="apexcharts-grid">
                                                                        <g id="SvgjsG4428" class="apexcharts-gridlines-horizontal">
                                                                            <line id="SvgjsLine4432" x1="0" y1="74.116" x2="582.859375" y2="74.116" stroke="var(--chart-border)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine4433" x1="0" y1="148.232" x2="582.859375" y2="148.232" stroke="var(--chart-border)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG4429" class="apexcharts-gridlines-vertical"></g>
                                                                        <line id="SvgjsLine4436" x1="0" y1="222.348" x2="582.859375" y2="222.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine4435" x1="0" y1="1" x2="0" y2="222.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG3958" class="apexcharts-bar-series apexcharts-plot-series">
                                                                        <g id="SvgjsG3959" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath3963" d="M 10.408203125 222.34900000000002 L 10.408203125 201.17300000000003 L 15.347005208333332 201.17300000000003 L 15.347005208333332 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter3964)" pathTo="M 10.408203125 222.34900000000002 L 10.408203125 201.17300000000003 L 15.347005208333332 201.17300000000003 L 15.347005208333332 222.34900000000002 Z" pathFrom="M 10.408203125 222.34900000000002 L 10.408203125 222.34900000000002 L 15.347005208333332 222.34900000000002 L 15.347005208333332 222.34900000000002 L 15.347005208333332 222.34900000000002 L 15.347005208333332 222.34900000000002 L 15.347005208333332 222.34900000000002 L 10.408203125 222.34900000000002 Z" cy="201.17200000000003" cx="37.16341145833333" j="0" val="200" barHeight="21.176000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath3974" d="M 38.16341145833333 222.34900000000002 L 38.16341145833333 201.17300000000003 L 43.10221354166666 201.17300000000003 L 43.10221354166666 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter3975)" pathTo="M 38.16341145833333 222.34900000000002 L 38.16341145833333 201.17300000000003 L 43.10221354166666 201.17300000000003 L 43.10221354166666 222.34900000000002 Z" pathFrom="M 38.16341145833333 222.34900000000002 L 38.16341145833333 222.34900000000002 L 43.10221354166666 222.34900000000002 L 43.10221354166666 222.34900000000002 L 43.10221354166666 222.34900000000002 L 43.10221354166666 222.34900000000002 L 43.10221354166666 222.34900000000002 L 38.16341145833333 222.34900000000002 Z" cy="201.17200000000003" cx="64.91861979166666" j="1" val="200" barHeight="21.176000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath3985" d="M 65.91861979166666 222.34900000000002 L 65.91861979166666 185.29100000000003 L 70.85742187499999 185.29100000000003 L 70.85742187499999 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter3986)" pathTo="M 65.91861979166666 222.34900000000002 L 65.91861979166666 185.29100000000003 L 70.85742187499999 185.29100000000003 L 70.85742187499999 222.34900000000002 Z" pathFrom="M 65.91861979166666 222.34900000000002 L 65.91861979166666 222.34900000000002 L 70.85742187499999 222.34900000000002 L 70.85742187499999 222.34900000000002 L 70.85742187499999 222.34900000000002 L 70.85742187499999 222.34900000000002 L 70.85742187499999 222.34900000000002 L 65.91861979166666 222.34900000000002 Z" cy="185.29000000000002" cx="92.67382812499999" j="2" val="350" barHeight="37.05800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath3996" d="M 93.67382812499999 222.34900000000002 L 93.67382812499999 179.997 L 98.61263020833331 179.997 L 98.61263020833331 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter3997)" pathTo="M 93.67382812499999 222.34900000000002 L 93.67382812499999 179.997 L 98.61263020833331 179.997 L 98.61263020833331 222.34900000000002 Z" pathFrom="M 93.67382812499999 222.34900000000002 L 93.67382812499999 222.34900000000002 L 98.61263020833331 222.34900000000002 L 98.61263020833331 222.34900000000002 L 98.61263020833331 222.34900000000002 L 98.61263020833331 222.34900000000002 L 98.61263020833331 222.34900000000002 L 93.67382812499999 222.34900000000002 Z" cy="179.996" cx="120.42903645833331" j="3" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4007" d="M 121.42903645833331 222.34900000000002 L 121.42903645833331 201.17300000000003 L 126.36783854166666 201.17300000000003 L 126.36783854166666 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4008)" pathTo="M 121.42903645833331 222.34900000000002 L 121.42903645833331 201.17300000000003 L 126.36783854166666 201.17300000000003 L 126.36783854166666 222.34900000000002 Z" pathFrom="M 121.42903645833331 222.34900000000002 L 121.42903645833331 222.34900000000002 L 126.36783854166666 222.34900000000002 L 126.36783854166666 222.34900000000002 L 126.36783854166666 222.34900000000002 L 126.36783854166666 222.34900000000002 L 126.36783854166666 222.34900000000002 L 121.42903645833331 222.34900000000002 Z" cy="201.17200000000003" cx="148.18424479166666" j="4" val="200" barHeight="21.176000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4018" d="M 149.18424479166666 222.34900000000002 L 149.18424479166666 195.87900000000002 L 154.123046875 195.87900000000002 L 154.123046875 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4019)" pathTo="M 149.18424479166666 222.34900000000002 L 149.18424479166666 195.87900000000002 L 154.123046875 195.87900000000002 L 154.123046875 222.34900000000002 Z" pathFrom="M 149.18424479166666 222.34900000000002 L 149.18424479166666 222.34900000000002 L 154.123046875 222.34900000000002 L 154.123046875 222.34900000000002 L 154.123046875 222.34900000000002 L 154.123046875 222.34900000000002 L 154.123046875 222.34900000000002 L 149.18424479166666 222.34900000000002 Z" cy="195.87800000000001" cx="175.939453125" j="5" val="250" barHeight="26.470000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4029" d="M 176.939453125 222.34900000000002 L 176.939453125 195.87900000000002 L 181.87825520833334 195.87900000000002 L 181.87825520833334 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4030)" pathTo="M 176.939453125 222.34900000000002 L 176.939453125 195.87900000000002 L 181.87825520833334 195.87900000000002 L 181.87825520833334 222.34900000000002 Z" pathFrom="M 176.939453125 222.34900000000002 L 176.939453125 222.34900000000002 L 181.87825520833334 222.34900000000002 L 181.87825520833334 222.34900000000002 L 181.87825520833334 222.34900000000002 L 181.87825520833334 222.34900000000002 L 181.87825520833334 222.34900000000002 L 176.939453125 222.34900000000002 Z" cy="195.87800000000001" cx="203.69466145833334" j="6" val="250" barHeight="26.470000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4040" d="M 204.69466145833334 222.34900000000002 L 204.69466145833334 185.29100000000003 L 209.63346354166669 185.29100000000003 L 209.63346354166669 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4041)" pathTo="M 204.69466145833334 222.34900000000002 L 204.69466145833334 185.29100000000003 L 209.63346354166669 185.29100000000003 L 209.63346354166669 222.34900000000002 Z" pathFrom="M 204.69466145833334 222.34900000000002 L 204.69466145833334 222.34900000000002 L 209.63346354166669 222.34900000000002 L 209.63346354166669 222.34900000000002 L 209.63346354166669 222.34900000000002 L 209.63346354166669 222.34900000000002 L 209.63346354166669 222.34900000000002 L 204.69466145833334 222.34900000000002 Z" cy="185.29000000000002" cx="231.44986979166669" j="7" val="350" barHeight="37.05800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4051" d="M 232.44986979166669 222.34900000000002 L 232.44986979166669 185.29100000000003 L 237.38867187500003 185.29100000000003 L 237.38867187500003 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4052)" pathTo="M 232.44986979166669 222.34900000000002 L 232.44986979166669 185.29100000000003 L 237.38867187500003 185.29100000000003 L 237.38867187500003 222.34900000000002 Z" pathFrom="M 232.44986979166669 222.34900000000002 L 232.44986979166669 222.34900000000002 L 237.38867187500003 222.34900000000002 L 237.38867187500003 222.34900000000002 L 237.38867187500003 222.34900000000002 L 237.38867187500003 222.34900000000002 L 237.38867187500003 222.34900000000002 L 232.44986979166669 222.34900000000002 Z" cy="185.29000000000002" cx="259.205078125" j="8" val="350" barHeight="37.05800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4062" d="M 260.205078125 222.34900000000002 L 260.205078125 169.40900000000002 L 265.1438802083333 169.40900000000002 L 265.1438802083333 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4063)" pathTo="M 260.205078125 222.34900000000002 L 260.205078125 169.40900000000002 L 265.1438802083333 169.40900000000002 L 265.1438802083333 222.34900000000002 Z" pathFrom="M 260.205078125 222.34900000000002 L 260.205078125 222.34900000000002 L 265.1438802083333 222.34900000000002 L 265.1438802083333 222.34900000000002 L 265.1438802083333 222.34900000000002 L 265.1438802083333 222.34900000000002 L 265.1438802083333 222.34900000000002 L 260.205078125 222.34900000000002 Z" cy="169.40800000000002" cx="286.9602864583333" j="9" val="500" barHeight="52.940000000000005" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4073" d="M 287.9602864583333 222.34900000000002 L 287.9602864583333 169.40900000000002 L 292.89908854166663 169.40900000000002 L 292.89908854166663 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4074)" pathTo="M 287.9602864583333 222.34900000000002 L 287.9602864583333 169.40900000000002 L 292.89908854166663 169.40900000000002 L 292.89908854166663 222.34900000000002 Z" pathFrom="M 287.9602864583333 222.34900000000002 L 287.9602864583333 222.34900000000002 L 292.89908854166663 222.34900000000002 L 292.89908854166663 222.34900000000002 L 292.89908854166663 222.34900000000002 L 292.89908854166663 222.34900000000002 L 292.89908854166663 222.34900000000002 L 287.9602864583333 222.34900000000002 Z" cy="169.40800000000002" cx="314.71549479166663" j="10" val="500" barHeight="52.940000000000005" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4084" d="M 315.71549479166663 222.34900000000002 L 315.71549479166663 148.233 L 320.65429687499994 148.233 L 320.65429687499994 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4085)" pathTo="M 315.71549479166663 222.34900000000002 L 315.71549479166663 148.233 L 320.65429687499994 148.233 L 320.65429687499994 222.34900000000002 Z" pathFrom="M 315.71549479166663 222.34900000000002 L 315.71549479166663 222.34900000000002 L 320.65429687499994 222.34900000000002 L 320.65429687499994 222.34900000000002 L 320.65429687499994 222.34900000000002 L 320.65429687499994 222.34900000000002 L 320.65429687499994 222.34900000000002 L 315.71549479166663 222.34900000000002 Z" cy="148.232" cx="342.47070312499994" j="11" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4095" d="M 343.47070312499994 222.34900000000002 L 343.47070312499994 132.351 L 348.40950520833326 132.351 L 348.40950520833326 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4096)" pathTo="M 343.47070312499994 222.34900000000002 L 343.47070312499994 132.351 L 348.40950520833326 132.351 L 348.40950520833326 222.34900000000002 Z" pathFrom="M 343.47070312499994 222.34900000000002 L 343.47070312499994 222.34900000000002 L 348.40950520833326 222.34900000000002 L 348.40950520833326 222.34900000000002 L 348.40950520833326 222.34900000000002 L 348.40950520833326 222.34900000000002 L 348.40950520833326 222.34900000000002 L 343.47070312499994 222.34900000000002 Z" cy="132.35" cx="370.22591145833326" j="12" val="850" barHeight="89.99800000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4106" d="M 371.22591145833326 222.34900000000002 L 371.22591145833326 148.233 L 376.1647135416666 148.233 L 376.1647135416666 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4107)" pathTo="M 371.22591145833326 222.34900000000002 L 371.22591145833326 148.233 L 376.1647135416666 148.233 L 376.1647135416666 222.34900000000002 Z" pathFrom="M 371.22591145833326 222.34900000000002 L 371.22591145833326 222.34900000000002 L 376.1647135416666 222.34900000000002 L 376.1647135416666 222.34900000000002 L 376.1647135416666 222.34900000000002 L 376.1647135416666 222.34900000000002 L 376.1647135416666 222.34900000000002 L 371.22591145833326 222.34900000000002 Z" cy="148.232" cx="397.9811197916666" j="13" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4117" d="M 398.9811197916666 222.34900000000002 L 398.9811197916666 179.997 L 403.9199218749999 179.997 L 403.9199218749999 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4118)" pathTo="M 398.9811197916666 222.34900000000002 L 398.9811197916666 179.997 L 403.9199218749999 179.997 L 403.9199218749999 222.34900000000002 Z" pathFrom="M 398.9811197916666 222.34900000000002 L 398.9811197916666 222.34900000000002 L 403.9199218749999 222.34900000000002 L 403.9199218749999 222.34900000000002 L 403.9199218749999 222.34900000000002 L 403.9199218749999 222.34900000000002 L 403.9199218749999 222.34900000000002 L 398.9811197916666 222.34900000000002 Z" cy="179.996" cx="425.7363281249999" j="14" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4128" d="M 426.7363281249999 222.34900000000002 L 426.7363281249999 179.997 L 431.6751302083332 179.997 L 431.6751302083332 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4129)" pathTo="M 426.7363281249999 222.34900000000002 L 426.7363281249999 179.997 L 431.6751302083332 179.997 L 431.6751302083332 222.34900000000002 Z" pathFrom="M 426.7363281249999 222.34900000000002 L 426.7363281249999 222.34900000000002 L 431.6751302083332 222.34900000000002 L 431.6751302083332 222.34900000000002 L 431.6751302083332 222.34900000000002 L 431.6751302083332 222.34900000000002 L 431.6751302083332 222.34900000000002 L 426.7363281249999 222.34900000000002 Z" cy="179.996" cx="453.4915364583332" j="15" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4139" d="M 454.4915364583332 222.34900000000002 L 454.4915364583332 195.87900000000002 L 459.4303385416665 195.87900000000002 L 459.4303385416665 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4140)" pathTo="M 454.4915364583332 222.34900000000002 L 454.4915364583332 195.87900000000002 L 459.4303385416665 195.87900000000002 L 459.4303385416665 222.34900000000002 Z" pathFrom="M 454.4915364583332 222.34900000000002 L 454.4915364583332 222.34900000000002 L 459.4303385416665 222.34900000000002 L 459.4303385416665 222.34900000000002 L 459.4303385416665 222.34900000000002 L 459.4303385416665 222.34900000000002 L 459.4303385416665 222.34900000000002 L 454.4915364583332 222.34900000000002 Z" cy="195.87800000000001" cx="481.2467447916665" j="16" val="250" barHeight="26.470000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4150" d="M 482.2467447916665 222.34900000000002 L 482.2467447916665 195.87900000000002 L 487.18554687499983 195.87900000000002 L 487.18554687499983 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4151)" pathTo="M 482.2467447916665 222.34900000000002 L 482.2467447916665 195.87900000000002 L 487.18554687499983 195.87900000000002 L 487.18554687499983 222.34900000000002 Z" pathFrom="M 482.2467447916665 222.34900000000002 L 482.2467447916665 222.34900000000002 L 487.18554687499983 222.34900000000002 L 487.18554687499983 222.34900000000002 L 487.18554687499983 222.34900000000002 L 487.18554687499983 222.34900000000002 L 487.18554687499983 222.34900000000002 L 482.2467447916665 222.34900000000002 Z" cy="195.87800000000001" cx="509.00195312499983" j="17" val="250" barHeight="26.470000000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4161" d="M 510.00195312499983 222.34900000000002 L 510.00195312499983 179.997 L 514.9407552083331 179.997 L 514.9407552083331 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4162)" pathTo="M 510.00195312499983 222.34900000000002 L 510.00195312499983 179.997 L 514.9407552083331 179.997 L 514.9407552083331 222.34900000000002 Z" pathFrom="M 510.00195312499983 222.34900000000002 L 510.00195312499983 222.34900000000002 L 514.9407552083331 222.34900000000002 L 514.9407552083331 222.34900000000002 L 514.9407552083331 222.34900000000002 L 514.9407552083331 222.34900000000002 L 514.9407552083331 222.34900000000002 L 510.00195312499983 222.34900000000002 Z" cy="179.996" cx="536.7571614583331" j="18" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4172" d="M 537.7571614583331 222.34900000000002 L 537.7571614583331 185.29100000000003 L 542.6959635416665 185.29100000000003 L 542.6959635416665 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4173)" pathTo="M 537.7571614583331 222.34900000000002 L 537.7571614583331 185.29100000000003 L 542.6959635416665 185.29100000000003 L 542.6959635416665 222.34900000000002 Z" pathFrom="M 537.7571614583331 222.34900000000002 L 537.7571614583331 222.34900000000002 L 542.6959635416665 222.34900000000002 L 542.6959635416665 222.34900000000002 L 542.6959635416665 222.34900000000002 L 542.6959635416665 222.34900000000002 L 542.6959635416665 222.34900000000002 L 537.7571614583331 222.34900000000002 Z" cy="185.29000000000002" cx="564.5123697916665" j="19" val="350" barHeight="37.05800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4183" d="M 565.5123697916665 222.34900000000002 L 565.5123697916665 179.997 L 570.4511718749999 179.997 L 570.4511718749999 222.34900000000002 Z" fill="rgba(115,102,255,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4184)" pathTo="M 565.5123697916665 222.34900000000002 L 565.5123697916665 179.997 L 570.4511718749999 179.997 L 570.4511718749999 222.34900000000002 Z" pathFrom="M 565.5123697916665 222.34900000000002 L 565.5123697916665 222.34900000000002 L 570.4511718749999 222.34900000000002 L 570.4511718749999 222.34900000000002 L 570.4511718749999 222.34900000000002 L 570.4511718749999 222.34900000000002 L 570.4511718749999 222.34900000000002 L 565.5123697916665 222.34900000000002 Z" cy="179.996" cx="592.2675781249999" j="20" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <g id="SvgjsG3961" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                                                <g id="SvgjsG3962" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG3973" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG3984" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG3995" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4006" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4017" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4028" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4039" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4050" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4061" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4072" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4083" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4094" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4105" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4116" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4127" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4138" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4149" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4160" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4171" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4182" className="apexcharts-bar-goals-groups"></g>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG4193" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1">
                                                                            <path id="SvgjsPath4197" d="M 10.408203125 201.17400000000004 L 10.408203125 158.82200000000003 L 15.347005208333332 158.82200000000003 L 15.347005208333332 201.17400000000004 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4198)" pathTo="M 10.408203125 201.17400000000004 L 10.408203125 158.82200000000003 L 15.347005208333332 158.82200000000003 L 15.347005208333332 201.17400000000004 Z" pathFrom="M 10.408203125 201.17400000000004 L 10.408203125 201.17400000000004 L 15.347005208333332 201.17400000000004 L 15.347005208333332 201.17400000000004 L 15.347005208333332 201.17400000000004 L 15.347005208333332 201.17400000000004 L 15.347005208333332 201.17400000000004 L 10.408203125 201.17400000000004 Z" cy="158.82100000000003" cx="37.16341145833333" j="0" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4208" d="M 38.16341145833333 201.17400000000004 L 38.16341145833333 137.64600000000002 L 43.10221354166666 137.64600000000002 L 43.10221354166666 201.17400000000004 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4209)" pathTo="M 38.16341145833333 201.17400000000004 L 38.16341145833333 137.64600000000002 L 43.10221354166666 137.64600000000002 L 43.10221354166666 201.17400000000004 Z" pathFrom="M 38.16341145833333 201.17400000000004 L 38.16341145833333 201.17400000000004 L 43.10221354166666 201.17400000000004 L 43.10221354166666 201.17400000000004 L 43.10221354166666 201.17400000000004 L 43.10221354166666 201.17400000000004 L 43.10221354166666 201.17400000000004 L 38.16341145833333 201.17400000000004 Z" cy="137.645" cx="64.91861979166666" j="1" val="600" barHeight="63.52800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4219" d="M 65.91861979166666 185.29200000000003 L 65.91861979166666 111.17600000000002 L 70.85742187499999 111.17600000000002 L 70.85742187499999 185.29200000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4220)" pathTo="M 65.91861979166666 185.29200000000003 L 65.91861979166666 111.17600000000002 L 70.85742187499999 111.17600000000002 L 70.85742187499999 185.29200000000003 Z" pathFrom="M 65.91861979166666 185.29200000000003 L 65.91861979166666 185.29200000000003 L 70.85742187499999 185.29200000000003 L 70.85742187499999 185.29200000000003 L 70.85742187499999 185.29200000000003 L 70.85742187499999 185.29200000000003 L 70.85742187499999 185.29200000000003 L 65.91861979166666 185.29200000000003 Z" cy="111.17500000000001" cx="92.67382812499999" j="2" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4230" d="M 93.67382812499999 179.99800000000002 L 93.67382812499999 137.64600000000002 L 98.61263020833331 137.64600000000002 L 98.61263020833331 179.99800000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4231)" pathTo="M 93.67382812499999 179.99800000000002 L 93.67382812499999 137.64600000000002 L 98.61263020833331 137.64600000000002 L 98.61263020833331 179.99800000000002 Z" pathFrom="M 93.67382812499999 179.99800000000002 L 93.67382812499999 179.99800000000002 L 98.61263020833331 179.99800000000002 L 98.61263020833331 179.99800000000002 L 98.61263020833331 179.99800000000002 L 98.61263020833331 179.99800000000002 L 98.61263020833331 179.99800000000002 L 93.67382812499999 179.99800000000002 Z" cy="137.645" cx="120.42903645833331" j="3" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4241" d="M 121.42903645833331 201.17400000000004 L 121.42903645833331 127.05800000000002 L 126.36783854166666 127.05800000000002 L 126.36783854166666 201.17400000000004 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4242)" pathTo="M 121.42903645833331 201.17400000000004 L 121.42903645833331 127.05800000000002 L 126.36783854166666 127.05800000000002 L 126.36783854166666 201.17400000000004 Z" pathFrom="M 121.42903645833331 201.17400000000004 L 121.42903645833331 201.17400000000004 L 126.36783854166666 201.17400000000004 L 126.36783854166666 201.17400000000004 L 126.36783854166666 201.17400000000004 L 126.36783854166666 201.17400000000004 L 126.36783854166666 201.17400000000004 L 121.42903645833331 201.17400000000004 Z" cy="127.05700000000002" cx="148.18424479166666" j="4" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4252" d="M 149.18424479166666 195.88000000000002 L 149.18424479166666 111.17600000000002 L 154.123046875 111.17600000000002 L 154.123046875 195.88000000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4253)" pathTo="M 149.18424479166666 195.88000000000002 L 149.18424479166666 111.17600000000002 L 154.123046875 111.17600000000002 L 154.123046875 195.88000000000002 Z" pathFrom="M 149.18424479166666 195.88000000000002 L 149.18424479166666 195.88000000000002 L 154.123046875 195.88000000000002 L 154.123046875 195.88000000000002 L 154.123046875 195.88000000000002 L 154.123046875 195.88000000000002 L 154.123046875 195.88000000000002 L 149.18424479166666 195.88000000000002 Z" cy="111.17500000000001" cx="175.939453125" j="5" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4263" d="M 176.939453125 195.88000000000002 L 176.939453125 111.17600000000002 L 181.87825520833334 111.17600000000002 L 181.87825520833334 195.88000000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4264)" pathTo="M 176.939453125 195.88000000000002 L 176.939453125 111.17600000000002 L 181.87825520833334 111.17600000000002 L 181.87825520833334 195.88000000000002 Z" pathFrom="M 176.939453125 195.88000000000002 L 176.939453125 195.88000000000002 L 181.87825520833334 195.88000000000002 L 181.87825520833334 195.88000000000002 L 181.87825520833334 195.88000000000002 L 181.87825520833334 195.88000000000002 L 181.87825520833334 195.88000000000002 L 176.939453125 195.88000000000002 Z" cy="111.17500000000001" cx="203.69466145833334" j="6" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4274" d="M 204.69466145833334 185.29200000000003 L 204.69466145833334 95.29400000000001 L 209.63346354166669 95.29400000000001 L 209.63346354166669 185.29200000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4275)" pathTo="M 204.69466145833334 185.29200000000003 L 204.69466145833334 95.29400000000001 L 209.63346354166669 95.29400000000001 L 209.63346354166669 185.29200000000003 Z" pathFrom="M 204.69466145833334 185.29200000000003 L 204.69466145833334 185.29200000000003 L 209.63346354166669 185.29200000000003 L 209.63346354166669 185.29200000000003 L 209.63346354166669 185.29200000000003 L 209.63346354166669 185.29200000000003 L 209.63346354166669 185.29200000000003 L 204.69466145833334 185.29200000000003 Z" cy="95.293" cx="231.44986979166669" j="7" val="850" barHeight="89.99800000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4285" d="M 232.44986979166669 185.29200000000003 L 232.44986979166669 95.29400000000001 L 237.38867187500003 95.29400000000001 L 237.38867187500003 185.29200000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4286)" pathTo="M 232.44986979166669 185.29200000000003 L 232.44986979166669 95.29400000000001 L 237.38867187500003 95.29400000000001 L 237.38867187500003 185.29200000000003 Z" pathFrom="M 232.44986979166669 185.29200000000003 L 232.44986979166669 185.29200000000003 L 237.38867187500003 185.29200000000003 L 237.38867187500003 185.29200000000003 L 237.38867187500003 185.29200000000003 L 237.38867187500003 185.29200000000003 L 237.38867187500003 185.29200000000003 L 232.44986979166669 185.29200000000003 Z" cy="95.293" cx="259.205078125" j="8" val="850" barHeight="89.99800000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4296" d="M 260.205078125 169.41000000000003 L 260.205078125 74.11800000000001 L 265.1438802083333 74.11800000000001 L 265.1438802083333 169.41000000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4297)" pathTo="M 260.205078125 169.41000000000003 L 260.205078125 74.11800000000001 L 265.1438802083333 74.11800000000001 L 265.1438802083333 169.41000000000003 Z" pathFrom="M 260.205078125 169.41000000000003 L 260.205078125 169.41000000000003 L 265.1438802083333 169.41000000000003 L 265.1438802083333 169.41000000000003 L 265.1438802083333 169.41000000000003 L 265.1438802083333 169.41000000000003 L 265.1438802083333 169.41000000000003 L 260.205078125 169.41000000000003 Z" cy="74.117" cx="286.9602864583333" j="9" val="900" barHeight="95.29200000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4307" d="M 287.9602864583333 169.41000000000003 L 287.9602864583333 74.11800000000001 L 292.89908854166663 74.11800000000001 L 292.89908854166663 169.41000000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4308)" pathTo="M 287.9602864583333 169.41000000000003 L 287.9602864583333 74.11800000000001 L 292.89908854166663 74.11800000000001 L 292.89908854166663 169.41000000000003 Z" pathFrom="M 287.9602864583333 169.41000000000003 L 287.9602864583333 169.41000000000003 L 292.89908854166663 169.41000000000003 L 292.89908854166663 169.41000000000003 L 292.89908854166663 169.41000000000003 L 292.89908854166663 169.41000000000003 L 292.89908854166663 169.41000000000003 L 287.9602864583333 169.41000000000003 Z" cy="74.117" cx="314.71549479166663" j="10" val="900" barHeight="95.29200000000002" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4318" d="M 315.71549479166663 148.234 L 315.71549479166663 74.118 L 320.65429687499994 74.118 L 320.65429687499994 148.234 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4319)" pathTo="M 315.71549479166663 148.234 L 315.71549479166663 74.118 L 320.65429687499994 74.118 L 320.65429687499994 148.234 Z" pathFrom="M 315.71549479166663 148.234 L 315.71549479166663 148.234 L 320.65429687499994 148.234 L 320.65429687499994 148.234 L 320.65429687499994 148.234 L 320.65429687499994 148.234 L 320.65429687499994 148.234 L 315.71549479166663 148.234 Z" cy="74.11699999999999" cx="342.47070312499994" j="11" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4329" d="M 343.47070312499994 132.352 L 343.47070312499994 68.82399999999998 L 348.40950520833326 68.82399999999998 L 348.40950520833326 132.352 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4330)" pathTo="M 343.47070312499994 132.352 L 343.47070312499994 68.82399999999998 L 348.40950520833326 68.82399999999998 L 348.40950520833326 132.352 Z" pathFrom="M 343.47070312499994 132.352 L 343.47070312499994 132.352 L 348.40950520833326 132.352 L 348.40950520833326 132.352 L 348.40950520833326 132.352 L 348.40950520833326 132.352 L 348.40950520833326 132.352 L 343.47070312499994 132.352 Z" cy="68.82299999999998" cx="370.22591145833326" j="12" val="600" barHeight="63.52800000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4340" d="M 371.22591145833326 148.234 L 371.22591145833326 95.29400000000001 L 376.1647135416666 95.29400000000001 L 376.1647135416666 148.234 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4341)" pathTo="M 371.22591145833326 148.234 L 371.22591145833326 95.29400000000001 L 376.1647135416666 95.29400000000001 L 376.1647135416666 148.234 Z" pathFrom="M 371.22591145833326 148.234 L 371.22591145833326 148.234 L 376.1647135416666 148.234 L 376.1647135416666 148.234 L 376.1647135416666 148.234 L 376.1647135416666 148.234 L 376.1647135416666 148.234 L 371.22591145833326 148.234 Z" cy="95.293" cx="397.9811197916666" j="13" val="500" barHeight="52.940000000000005" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4351" d="M 398.9811197916666 179.99800000000002 L 398.9811197916666 95.29400000000001 L 403.9199218749999 95.29400000000001 L 403.9199218749999 179.99800000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4352)" pathTo="M 398.9811197916666 179.99800000000002 L 398.9811197916666 95.29400000000001 L 403.9199218749999 95.29400000000001 L 403.9199218749999 179.99800000000002 Z" pathFrom="M 398.9811197916666 179.99800000000002 L 398.9811197916666 179.99800000000002 L 403.9199218749999 179.99800000000002 L 403.9199218749999 179.99800000000002 L 403.9199218749999 179.99800000000002 L 403.9199218749999 179.99800000000002 L 403.9199218749999 179.99800000000002 L 398.9811197916666 179.99800000000002 Z" cy="95.293" cx="425.7363281249999" j="14" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4362" d="M 426.7363281249999 179.99800000000002 L 426.7363281249999 95.29400000000001 L 431.6751302083332 95.29400000000001 L 431.6751302083332 179.99800000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4363)" pathTo="M 426.7363281249999 179.99800000000002 L 426.7363281249999 95.29400000000001 L 431.6751302083332 95.29400000000001 L 431.6751302083332 179.99800000000002 Z" pathFrom="M 426.7363281249999 179.99800000000002 L 426.7363281249999 179.99800000000002 L 431.6751302083332 179.99800000000002 L 431.6751302083332 179.99800000000002 L 431.6751302083332 179.99800000000002 L 431.6751302083332 179.99800000000002 L 431.6751302083332 179.99800000000002 L 426.7363281249999 179.99800000000002 Z" cy="95.293" cx="453.4915364583332" j="15" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4373" d="M 454.4915364583332 195.88000000000002 L 454.4915364583332 111.17600000000002 L 459.4303385416665 111.17600000000002 L 459.4303385416665 195.88000000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4374)" pathTo="M 454.4915364583332 195.88000000000002 L 454.4915364583332 111.17600000000002 L 459.4303385416665 111.17600000000002 L 459.4303385416665 195.88000000000002 Z" pathFrom="M 454.4915364583332 195.88000000000002 L 454.4915364583332 195.88000000000002 L 459.4303385416665 195.88000000000002 L 459.4303385416665 195.88000000000002 L 459.4303385416665 195.88000000000002 L 459.4303385416665 195.88000000000002 L 459.4303385416665 195.88000000000002 L 454.4915364583332 195.88000000000002 Z" cy="111.17500000000001" cx="481.2467447916665" j="16" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4384" d="M 482.2467447916665 195.88000000000002 L 482.2467447916665 111.17600000000002 L 487.18554687499983 111.17600000000002 L 487.18554687499983 195.88000000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4385)" pathTo="M 482.2467447916665 195.88000000000002 L 482.2467447916665 111.17600000000002 L 487.18554687499983 111.17600000000002 L 487.18554687499983 195.88000000000002 Z" pathFrom="M 482.2467447916665 195.88000000000002 L 482.2467447916665 195.88000000000002 L 487.18554687499983 195.88000000000002 L 487.18554687499983 195.88000000000002 L 487.18554687499983 195.88000000000002 L 487.18554687499983 195.88000000000002 L 487.18554687499983 195.88000000000002 L 482.2467447916665 195.88000000000002 Z" cy="111.17500000000001" cx="509.00195312499983" j="17" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4395" d="M 510.00195312499983 179.99800000000002 L 510.00195312499983 137.64600000000002 L 514.9407552083331 137.64600000000002 L 514.9407552083331 179.99800000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4396)" pathTo="M 510.00195312499983 179.99800000000002 L 510.00195312499983 137.64600000000002 L 514.9407552083331 137.64600000000002 L 514.9407552083331 179.99800000000002 Z" pathFrom="M 510.00195312499983 179.99800000000002 L 510.00195312499983 179.99800000000002 L 514.9407552083331 179.99800000000002 L 514.9407552083331 179.99800000000002 L 514.9407552083331 179.99800000000002 L 514.9407552083331 179.99800000000002 L 514.9407552083331 179.99800000000002 L 510.00195312499983 179.99800000000002 Z" cy="137.645" cx="536.7571614583331" j="18" val="400" barHeight="42.352000000000004" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4406" d="M 537.7571614583331 185.29200000000003 L 537.7571614583331 111.17600000000002 L 542.6959635416665 111.17600000000002 L 542.6959635416665 185.29200000000003 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4407)" pathTo="M 537.7571614583331 185.29200000000003 L 537.7571614583331 111.17600000000002 L 542.6959635416665 111.17600000000002 L 542.6959635416665 185.29200000000003 Z" pathFrom="M 537.7571614583331 185.29200000000003 L 537.7571614583331 185.29200000000003 L 542.6959635416665 185.29200000000003 L 542.6959635416665 185.29200000000003 L 542.6959635416665 185.29200000000003 L 542.6959635416665 185.29200000000003 L 542.6959635416665 185.29200000000003 L 537.7571614583331 185.29200000000003 Z" cy="111.17500000000001" cx="564.5123697916665" j="19" val="700" barHeight="74.11600000000001" barWidth="6.938802083333332"></path>
                                                                            <path id="SvgjsPath4417" d="M 565.5123697916665 179.99800000000002 L 565.5123697916665 95.29400000000001 L 570.4511718749999 95.29400000000001 L 570.4511718749999 179.99800000000002 Z" fill="rgba(170,175,203,1)" fill-opacity="1" stroke="f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzojyqct5h)" filter="url(#SvgjsFilter4418)" pathTo="M 565.5123697916665 179.99800000000002 L 565.5123697916665 95.29400000000001 L 570.4511718749999 95.29400000000001 L 570.4511718749999 179.99800000000002 Z" pathFrom="M 565.5123697916665 179.99800000000002 L 565.5123697916665 179.99800000000002 L 570.4511718749999 179.99800000000002 L 570.4511718749999 179.99800000000002 L 570.4511718749999 179.99800000000002 L 570.4511718749999 179.99800000000002 L 570.4511718749999 179.99800000000002 L 565.5123697916665 179.99800000000002 Z" cy="95.293" cx="592.2675781249999" j="20" val="800" barHeight="84.70400000000001" barWidth="6.938802083333332"></path>
                                                                            <g id="SvgjsG4195" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                                                <g id="SvgjsG4196" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4207" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4218" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4229" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4240" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4251" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4262" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4273" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4284" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4295" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4306" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4317" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4328" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4339" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4350" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4361" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4372" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4383" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4394" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4405" className="apexcharts-bar-goals-groups"></g>
                                                                                <g id="SvgjsG4416" className="apexcharts-bar-goals-groups"></g>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG3960" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                                        <g id="SvgjsG4194" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                                    </g>
                                                                    <g id="SvgjsG4430" class="apexcharts-grid-borders">
                                                                        <line id="SvgjsLine4431" x1="0" y1="0" x2="582.859375" y2="0" stroke="var(--chart-border)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine4434" x1="0" y1="222.348" x2="582.859375" y2="222.348" stroke="var(--chart-border)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <line id="SvgjsLine4516" x1="0" y1="0" x2="582.859375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine4517" x1="0" y1="0" x2="582.859375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG4518" class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG4519" class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG4520" class="apexcharts-point-annotations"></g>
                                                                </g>
                                                                <g id="SvgjsG4502" class="apexcharts-yaxis" rel="0" transform="translate(24.140625, 0)">
                                                                    <g id="SvgjsG4503" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4505" font-family="Rubik, sans-serif" x="20" y="31.3" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Rubik, sans-serif;">
                                                                            <tspan id="SvgjsTspan4506">2100</tspan>
                                                                            <title>2100</title>
                                                                        </text><text id="SvgjsText4508" font-family="Rubik, sans-serif" x="20" y="105.416" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Rubik, sans-serif;">
                                                                            <tspan id="SvgjsTspan4509">1400</tspan>
                                                                            <title>1400</title>
                                                                        </text><text id="SvgjsText4511" font-family="Rubik, sans-serif" x="20" y="179.532" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Rubik, sans-serif;">
                                                                            <tspan id="SvgjsTspan4512">700</tspan>
                                                                            <title>700</title>
                                                                        </text><text id="SvgjsText4514" font-family="Rubik, sans-serif" x="20" y="253.64800000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Rubik, sans-serif;">
                                                                            <tspan id="SvgjsTspan4515">0</tspan>
                                                                            <title>0</title>
                                                                        </text></g>
                                                                </g>
                                                                <g id="SvgjsG3948" class="apexcharts-annotations"></g>
                                                            </svg>
                                                            <div class="apexcharts-legend" style="max-height: 145px;"></div>
                                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 102, 255);"></span>
                                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(170, 175, 203);"></span>
                                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                                <div class="apexcharts-yaxistooltip-text"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-sm-5 p-0">
                                <div class="row g-sm-4 g-2">
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assets/svg/icon-sprite.svg#income"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Income</span>
                                                <h6 class="mt-1 mb-0">$22,678</h6>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                                                </div><span class="font-success">+$456</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assets/svg/icon-sprite.svg#expense"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Expense</span>
                                                <h6 class="mt-1 mb-0">$12,057</h6>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="expensedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="expensedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                                                </div><span class="font-danger">+$256</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assets/svg/icon-sprite.svg#doller-return"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Cashback</span>
                                                <h6 class="mt-1 mb-0">8,475</h6>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="cashbackdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cashbackdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-ed-6 col-xl-8">
                <div class="row">
                    <?= GridView::widget([
                        'id' => 'crud-datatable',
                        'dataProvider' => $dataProvider,
                        'filterModel' => null,

                        'summary' => "Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",

                        'pager' => [


                            'firstPageLabel' => 'Previous',
                            'lastPageLabel'  => 'Next',
                            // 'options'       =>  [
                            //     'class' => 'float-end'
                            // ]
                            // 'class' => LinkPager::class
                        ],

                        'pjax' => true,

                        'columns' => require('C:\Apache24\htdocs\keuangan-dhila\admin\views\siswa2\_columns.php'),
                        'toolbar' => [
                            [
                                'content' =>
                                '<hr>'
                            ],
                        ],
                        'striped' => false,
                        'condensed' => true,
                        'responsive' => true,
                        // 'tableOptions' => ['class' => 'table table-hover table-lg'],
                        'panel' => [
                            'type' => '',
                            'footer' => false,

                            'heading' => '<b>Daftar Client</b>',
                            // 'before' => '<div class="input-group mb-3">
                            //                 <input type="text" class="form-control" placeholder="Cari Nama Client..." aria-label="Recipients username" aria-describedby="button-addon2">
                            //                 <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fas fa-search"></i> Pencarian</button>
                            //             </div>',
                            'before' =>

                            Html::beginForm(['/siswa2/index'], 'GET', ['class' => 'form-inline']) .
                                '<div class="input-group mb-3">' .
                                Html::input('text', 'Siswa2Search[cari]', '', ['class' => 'form-control', 'placeholder' => 'Cari Nama Jasa...']) .
                                Html::submitButton(
                                    '<i class="fas fa-search"></i> Pencarian',
                                    [
                                        'data-pjax' => 1,
                                        'class' => 'btn btn-outline-primary'
                                    ]
                                ) . '</div>'
                                . Html::endForm(),
                            // 'after' => BulkButtonWidget::widget([
                            //     'buttons' => Html::a(
                            //         '<i class="fas fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus semua',
                            //         ["bulkdelete"],
                            //         [
                            //             "class" => "btn btn-danger btn-xs",
                            //             'role' => 'modal-remote-bulk',
                            //             'data-confirm' => false, 'data-method' => false, // for overide yii data api
                            //             'data-request-method' => 'post',
                            //             'data-confirm-title' => 'Aapakah anda yakin?',
                            //             'data-confirm-message' => 'Apakah Anda yakin akan menghapus data ini?'
                            //         ]
                            //     ),
                            // ]) .
                            //     '<div class="clearfix"></div>',

                            'after' => '<br><div class="d-flex justify-content-between">{summary}{pager} </div>',

                            // 'footer' => '<div class="d-flex justify-content-between">{summary}{pager} </div>',

                        ]
                    ]) ?>
                </div>
            </div>
            <div class="col-xxl-3 col-ed-5 col-xl-4 col-sm-6 box-col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="default-datepicker">
                                <div class="datepicker-here" data-language="en">
                                    <div class="datepicker-inline">
                                        <div class="datepicker"><i class="datepicker--pointer"></i>
                                            <nav class="datepicker--nav">
                                                <div class="datepicker--nav-action" data-action="prev"><svg>
                                                        <path d="M 17,12 l -5,5 l 5,5"></path>
                                                    </svg></div>
                                                <div class="datepicker--nav-title">March, <i> 2023 </i></div>
                                                <div class="datepicker--nav-action" data-action="next"><svg>
                                                        <path d="M 14,12 l 5,5 l -5,5"></path>
                                                    </svg></div>
                                            </nav>
                                            <div class="datepicker--content">
                                                <div class="datepicker--days datepicker--body active">
                                                    <div class="datepicker--days-names">
                                                        <div class="datepicker--day-name -weekend-">S</div>
                                                        <div class="datepicker--day-name">M</div>
                                                        <div class="datepicker--day-name">T</div>
                                                        <div class="datepicker--day-name">W</div>
                                                        <div class="datepicker--day-name">T</div>
                                                        <div class="datepicker--day-name">F</div>
                                                        <div class="datepicker--day-name -weekend-">S</div>
                                                    </div>
                                                    <div class="datepicker--cells datepicker--cells-days">
                                                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="26" data-month="1" data-year="2023">26</div>
                                                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="27" data-month="1" data-year="2023">27</div>
                                                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="28" data-month="1" data-year="2023">28</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="2" data-year="2023">1</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="2" data-year="2023">2</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="2" data-year="2023">3</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="4" data-month="2" data-year="2023">4</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="5" data-month="2" data-year="2023">5</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="2" data-year="2023">6</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="2" data-year="2023">7</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="2" data-year="2023">8</div>
                                                        <div class="datepicker--cell datepicker--cell-day -current-" data-date="9" data-month="2" data-year="2023">9</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="2" data-year="2023">10</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="11" data-month="2" data-year="2023">11</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="2" data-year="2023">12</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="2" data-year="2023">13</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="2" data-year="2023">14</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="2" data-year="2023">15</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="2" data-year="2023">16</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="2" data-year="2023">17</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="18" data-month="2" data-year="2023">18</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="2" data-year="2023">19</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="2" data-year="2023">20</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="2" data-year="2023">21</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="2" data-year="2023">22</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="2" data-year="2023">23</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="2" data-year="2023">24</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="25" data-month="2" data-year="2023">25</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="2" data-year="2023">26</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="2" data-year="2023">27</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="2" data-year="2023">28</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="2" data-year="2023">29</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="2" data-year="2023">30</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="31" data-month="2" data-year="2023">31</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="1" data-month="3" data-year="2023">1</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card schedule-card">
                                <div class="card-header card-no-border">
                                    <div class="header-top">
                                        <h5 class="m-0">Upcoming Schedule</h5>
                                        <div class="card-header-right-icon"><a class="btn badge-light-primary" href="#">+ Create</a></div>
                                    </div>
                                </div> -->
                            <!-- <div class="card-body pt-0"> -->
                            <div class="mt-4">
                                <div>
                                    <h5 class="m-0">Upcoming Schedule</h5>
                                </div>
                                <div>
                                    <ul class="schedule-list mt-4">
                                        <li class="primary">
                                            <div>
                                                <h6 class="mb-1">Web Design</h6>
                                                <span>January 3, 2022</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>