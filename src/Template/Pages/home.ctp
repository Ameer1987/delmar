<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->layout = false;
?>
<!DOCTYPE html>
<html dir="<?= $dir ?>" lang="<?= $lang ?>">
    <head>
        <?= $this->Html->charset() ?>

        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Medicale - Health & Medical HTML5 Template" />
        <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
        <meta name="author" content="ThemeMascot" />

        <title>Delmar and Attalla pharmacies</title>

        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('jquery-ui.min.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('css-plugin-collections.css') ?>
        <?= $this->Html->css('menuzord-skins/menuzord-border-bottom.css') ?>
        <?= $this->Html->css('style-main.css') ?>
        <?= $this->Html->css('preloader.css') ?>
        <?= $this->Html->css('custom-bootstrap-margin-padding.css') ?>
        <?= $this->Html->css('responsive.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/settings.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/layers.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/navigation.css') ?>
        <?= $this->Html->css('colors/theme-skin-blue6.css') ?>


        <?= $this->Html->script('jquery-2.2.4.min.js') ?>
        <?= $this->Html->script('jquery-ui.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('jquery-plugin-collection.js') ?>
        <?= $this->Html->script('revolution-slider/js/jquery.themepunch.tools.min.js') ?>
        <?= $this->Html->script('revolution-slider/js/jquery.themepunch.revolution.min.js') ?>
        <?= $this->Html->script('custom.js') ?>
    </head>
    <body class="">

        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <div class="preloader-dot-loading">
                        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <header id="header" class="header">
                <div class="header-top bg-theme-colored sm-text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                                <div class="widget no-border m-0">
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                        <li><a target="_blank" href="<?= $SocialLinks['facebook'] ?>"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a target="_blank" href="<?= $SocialLinks['twitter'] ?>"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a target="_blank" href="<?= $SocialLinks['google_plus'] ?>"><i class="fa fa-google-plus text-white"></i></a></li>
                                        <li><a target="_blank" href="<?= $SocialLinks['instagram'] ?>"><i class="fa fa-instagram text-white"></i></a></li>
                                        <li><a target="_blank" href="<?= $SocialLinks['linkedin'] ?>"><i class="fa fa-linkedin text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                        <div class="container">
                            <nav id="menuzord-right" class="menuzord blue">
                                <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                                    <img src="images/logo-wide.png" alt="">
                                </a>
                                <ul class="menuzord-menu onepage-nav">
                                    <li class="active"><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#departments">Departments</a></li>
                                    <li><a href="#doctors">Doctors</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home" class="divider">
                    <div class="container-fluid p-0">

                        <!-- Slider Revolution Start -->
                        <div class="rev_slider_wrapper">
                            <div class="rev_slider" data-version="5.0">
                                <ul>

                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/bg9.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/bg/bg9.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-30 pr-30"
                                             id="rs-1-layer-1"

                                             data-x="['center']"
                                             data-hoffset="['0']"
                                             data-y="['middle']"
                                             data-voffset="['-90']" 
                                             data-fontsize="['28']"
                                             data-lineheight="['54']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">We Provide Total
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-40 pr-40"
                                             id="rs-1-layer-2"

                                             data-x="['center']"
                                             data-hoffset="['0']"
                                             data-y="['middle']"
                                             data-voffset="['-20']"
                                             data-fontsize="['48']"
                                             data-lineheight="['70']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">Health Care Solution 
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption tp-resizeme text-center text-black" 
                                             id="rs-1-layer-3"

                                             data-x="['center']"
                                             data-hoffset="['0']"
                                             data-y="['middle']"
                                             data-voffset="['50','60','70']"
                                             data-fontsize="['16','18','24']"
                                             data-lineheight="['28']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption" 
                                             id="rs-1-layer-4"

                                             data-x="['center']"
                                             data-hoffset="['0']"
                                             data-y="['middle']"
                                             data-voffset="['135','145','155']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a> 
                                        </div>
                                    </li>

                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/bg14.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/bg/bg14.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-15 pr-15"
                                             id="rs-2-layer-1"

                                             data-x="['left']"
                                             data-hoffset="['30']"
                                             data-y="['middle']"
                                             data-voffset="['-110']" 
                                             data-fontsize="['30']"
                                             data-lineheight="['50']"

                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600;">We Provide Total
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-15 pr-15"
                                             id="rs-2-layer-2"

                                             data-x="['left']"
                                             data-hoffset="['30']"
                                             data-y="['middle']"
                                             data-voffset="['-45']" 
                                             data-fontsize="['48']"
                                             data-lineheight="['70']"

                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600;">Health Care Solution 
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption tp-resizeme text-black" 
                                             id="rs-2-layer-3"

                                             data-x="['left']"
                                             data-hoffset="['35']"
                                             data-y="['middle']"
                                             data-voffset="['35','45','55']"
                                             data-fontsize="['16','18','24']"
                                             data-lineheight="['28']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption" 
                                             id="rs-2-layer-4"

                                             data-x="['left']"
                                             data-hoffset="['35']"
                                             data-y="['middle']"
                                             data-voffset="['110','120','140']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a> 
                                        </div>
                                    </li>

                                    <!-- SLIDE 3 -->
                                    <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/bg8.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/bg/bg8.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-15 pr-15"
                                             id="rs-3-layer-1"

                                             data-x="['right']"
                                             data-hoffset="['30']"
                                             data-y="['middle']"
                                             data-voffset="['-110']" 
                                             data-fontsize="['30']"
                                             data-lineheight="['50']"

                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600;">We Provide Total
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-15 pr-15"
                                             id="rs-3-layer-2"

                                             data-x="['right']"
                                             data-hoffset="['30']"
                                             data-y="['middle']"
                                             data-voffset="['-45']" 
                                             data-fontsize="['48']"
                                             data-lineheight="['70']"

                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1000" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 7; white-space: nowrap; font-weight:600;">Health Care Solution 
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption tp-resizeme text-right text-black" 
                                             id="rs-3-layer-3"

                                             data-x="['right']"
                                             data-hoffset="['35']"
                                             data-y="['middle']"
                                             data-voffset="['30','40','50']"
                                             data-fontsize="['16','18','24']"
                                             data-lineheight="['28']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;s:500"
                                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption" 
                                             id="rs-3-layer-4"

                                             data-x="['right']"
                                             data-hoffset="['35']"
                                             data-y="['middle']"
                                             data-voffset="['110','120','140']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                             data-start="1400" 
                                             data-splitin="none" 
                                             data-splitout="none" 
                                             data-responsive_offset="on"
                                             style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a> 
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end .rev_slider -->
                        </div>
                        <!-- end .rev_slider_wrapper -->
                        <script>
                            $(document).ready(function (e) {
                                var revapi = $(".rev_slider").revolution({
                                    sliderType: "standard",
                                    sliderLayout: "auto",
                                    dottedOverlay: "none",
                                    delay: 5000,
                                    navigation: {
                                        keyboardNavigation: "off",
                                        keyboard_direction: "horizontal",
                                        mouseScrollNavigation: "off",
                                        onHoverStop: "off",
                                        touch: {
                                            touchenabled: "on",
                                            swipe_threshold: 75,
                                            swipe_min_touches: 1,
                                            swipe_direction: "horizontal",
                                            drag_block_vertical: false
                                        },
                                        arrows: {
                                            style: "zeus",
                                            enable: true,
                                            hide_onmobile: true,
                                            hide_under: 600,
                                            hide_onleave: true,
                                            hide_delay: 200,
                                            hide_delay_mobile: 1200,
                                            tmp: '',
                                            left: {
                                                h_align: "left",
                                                v_align: "center",
                                                h_offset: 30,
                                                v_offset: 0
                                            },
                                            right: {
                                                h_align: "right",
                                                v_align: "center",
                                                h_offset: 30,
                                                v_offset: 0
                                            }
                                        },
                                        bullets: {
                                            enable: true,
                                            hide_onmobile: true,
                                            hide_under: 600,
                                            style: "hebe",
                                            hide_onleave: false,
                                            direction: "horizontal",
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: 0,
                                            v_offset: 30,
                                            space: 5,
                                            tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                        }
                                    },
                                    responsiveLevels: [1240, 1024, 778],
                                    visibilityLevels: [1240, 1024, 778],
                                    gridwidth: [1170, 1024, 778, 480],
                                    gridheight: [600, 668, 860, 620],
                                    lazyType: "none",
                                    parallax: {
                                        origo: "slidercenter",
                                        speed: 1000,
                                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                        type: "scroll"
                                    },
                                    shadow: 0,
                                    spinner: "off",
                                    stopLoop: "on",
                                    stopAfterLoops: 0,
                                    stopAtSlide: -1,
                                    shuffle: "off",
                                    autoHeight: "off",
                                    fullScreenAutoWidth: "off",
                                    fullScreenAlignForce: "off",
                                    fullScreenOffsetContainer: "",
                                    fullScreenOffset: "0",
                                    hideThumbsOnMobile: "off",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: "off",
                                        nextSlideOnWindowFocus: "off",
                                        disableFocusListener: false,
                                    }
                                });
                            });
                        </script>
                        <!-- Slider Revolution Ends -->

                    </div>
                </section>

                <!-- Section: home-boxes -->
                <section>
                    <div class="container pt-0 pb-0">
                        <div class="section-content">
                            <div class="row equal-height-inner home-boxes mt-sm-0" data-margin-top="-100px">
                                <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                    <div class="sm-height-auto bg-theme-colored">
                                        <div class="p-30">
                                            <img src="images/flaticon-png-medical/small/antibiotic.png" width="70" alt="">
                                            <h4 class="text-uppercase text-white">Medical Services</h4>
                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                            <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">View all services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                    <div class="sm-height-auto bg-theme-colored-darker2">
                                        <div class="p-30">
                                            <img src="images/flaticon-png-medical/small/spinal-column.png" width="70" alt="">
                                            <h4 class="text-uppercase text-white">Departments</h4>
                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                            <a href="#" class="btn btn-border btn-circled btn-transparent btn-sm">View all departments</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                    <div class="sm-height-auto bg-theme-colored-darker3">
                                        <div class="p-30">
                                            <img src="images/flaticon-png-medical/small/stethoscope.png" width="70" alt="">
                                            <h4 class="text-uppercase text-white">Appointment</h4>
                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                            <a href="page-donate.html" class="btn btn-border btn-circled btn-transparent btn-sm">Make an appontment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                    <div class="sm-height-auto bg-theme-colored-darker4">
                                        <div class="p-30">
                                            <img src="images/flaticon-png-medical/small/wheelchair.png" width="70" alt="">
                                            <h4 class="text-uppercase text-white">Emergency Case</h4>
                                            <h2 class="text-white">+(012) 345 6789</h2>
                                            <a href="page-contact1.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: About  -->
                <section id="about">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                                    <div class="image-box-thum">
                                        <img class="img-fullwidth" alt="" src="images/photos/2.jpg">
                                    </div>
                                    <div class="image-box-details pt-20 pb-sm-20">
                                        <h4 class="title mt-0 line-bottom">Medical Counseling</h4>
                                        <p class="desc mb-10">Lorem ipsum dolor sit amet cons ectetur adipisicing ipsa ullam dicta suscipit ipsum</p>
                                        <a href="#" class="btn-read-more">Read more</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                                    <div class="image-box-thum">
                                        <img class="img-fullwidth" alt="" src="images/photos/1.jpg">
                                    </div>
                                    <div class="image-box-details pt-20 pb-sm-20">
                                        <h4 class="title mt-0 line-bottom">Healthcare for Kids</h4>
                                        <p class="desc mb-10">Lorem ipsum dolor sit amet cons ectetur adipisicing ipsa ullam dicta suscipit ipsum</p>
                                        <a href="#" class="btn-read-more">Read more</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                                    <div class="image-box-thum">
                                        <img class="img-fullwidth" alt="" src="images/photos/3.jpg">
                                    </div>
                                    <div class="image-box-details pt-20 pb-sm-20">
                                        <h4 class="title mt-0 line-bottom">Qualified Doctors</h4>
                                        <p class="desc mb-10">Lorem ipsum dolor sit amet cons ectetur adipisicing ipsa ullam dicta suscipit ipsum</p>
                                        <a href="#" class="btn-read-more">Read more</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="image-box-thum">
                                        <img class="img-fullwidth" alt="" src="images/photos/4.jpg">
                                    </div>
                                    <div class="image-box-details pt-20">
                                        <h4 class="title mt-0 line-bottom">Modern Equipments</h4>
                                        <p class="desc mb-10">Lorem ipsum dolor sit amet cons ectetur adipisicing ipsa ullam dicta suscipit ipsum</p>
                                        <a href="#" class="btn-read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: -->
                <section data-bg-img="images/pattern/p5.png">
                    <div class="container pb-70">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="border-10px p-30 bg-white">
                                        <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
                                        <div class="opening-hours text-left">
                                            <ul class="list-unstyled">
                                                <li class="clearfix line-height-1"> <span> Monday - Friday </span>
                                                    <div class="value"> 9.00 - 20.00 </div>
                                                </li>
                                                <li class="clearfix line-height-1"> <span> Saturday </span>
                                                    <div class="value"> 10.00 - 16.00 </div>
                                                </li>
                                                <li class="clearfix line-height-1"> <span> Sunday </span>
                                                    <div class="value"> 9.30 - 18.00 </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="mt-30"><i class="fa fa-pencil-square-o text-theme-colored"></i> Need Help?</h5>
                                        <p class="mt-0">Just make an appointment to get help from our experts</p>
                                        <a href="#" class="btn btn-dark btn-theme-colored btn-sm">Contact Now</a>
                                    </div>
                                </div>
                                <div class="col-md-8 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="owl-carousel-1col owl-dots-bottom-right" data-dots="true">
                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="col-md-5">
                                                    <img src="images/team/h1.jpg" alt="">
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="mb-0 text-black-999">Gynaecologist</h5>
                                                    <h2 class="line-bottom mt-0">Dr. Brian Adam</h2>
                                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                                                    <a href="#" class="btn-read-more mt-15">Contact Now</a>
                                                    <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-20">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="col-md-5">
                                                    <img src="images/team/h2.jpg" alt="">
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="mb-0 text-black-999">Gynaecologist</h5>
                                                    <h2 class="line-bottom mt-0">Dr. Brian Adam</h2>
                                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                                                    <a href="#" class="btn-read-more mt-15">Contact Now</a>
                                                    <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-20">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="col-md-5">
                                                    <img src="images/team/h3.jpg" alt="">
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="mb-0 text-black-999">Gynaecologist</h5>
                                                    <h2 class="line-bottom mt-0">Dr. Brian Adam</h2>
                                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                                                    <a href="#" class="btn-read-more mt-15">Contact Now</a>
                                                    <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-20">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Services -->
                <section id="services">
                    <div class="container pb-40">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase mt-0 line-height-1">Services</h2>
                                    <div class="title-icon">
                                        <img class="mb-10" src="images/title-icon.png" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/blood-transfusion.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Emergency Care</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/cardiogram-2.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Operation Theatre</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/stethoscope.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Outdoor Checkup</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/antibiotic.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Cancer Service</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/syringe-2.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Blood Test</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media p-0">
                                        <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/pills.png" alt="" width="64"></a>
                                        <div class="media-body">
                                            <h5 class="media-heading heading">Pharmacy</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Specialities -->
                <section data-bg-img="images/pattern/p4.png" id="departments">
                    <div class="container pb-70">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase mt-0 line-height-1">Our Specialities</h2>
                                    <div class="title-icon">
                                        <img class="mb-10" src="images/title-icon.png" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-centent">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-tab border-10px bg-white">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab11" data-toggle="tab"><i class="flaticon-medical-xray2"></i><span>Orthopaedics</span></a></li>
                                            <li><a href="#tab12" data-toggle="tab"><i class="flaticon-medical-heart36"></i><span>Cardiology</span></a></li>
                                            <li><a href="#tab13" data-toggle="tab"><i class="flaticon-medical-brain9"></i><span>Neurology</span></a></li>
                                            <li><a href="#tab14" data-toggle="tab"><i class="flaticon-medical-teeth1"></i><span>Dental</span></a></li>
                                            <li><a href="#tab15" data-toggle="tab"><i class="flaticon-medical-hospital35"></i><span>Haematology</span></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab11">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                            <img class="img-fullwidth" src="images/services/1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="service-content">
                                                            <h3 class="sub-title mb-0 mt-15">Services</h3>
                                                            <h1 class="title mt-0">Orthopaedics</h1>
                                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione.</p>
                                                            <ul class="mt-10">
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                            </ul>
                                                            <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                            <img class="img-fullwidth" src="images/services/2.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="service-content">
                                                            <h3 class="sub-title mb-0 mt-15">Services</h3>
                                                            <h1 class="title mt-0">Cardiology</h1>
                                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione.</p>
                                                            <ul class="mt-10">
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                            </ul>
                                                            <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab13">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                            <img class="img-fullwidth" src="images/services/3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="service-content">
                                                            <h3 class="sub-title mb-0 mt-15">Services</h3>
                                                            <h1 class="title mt-0">Neurology</h1>
                                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione.</p>
                                                            <ul class="mt-10">
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                                <li class="mb-10">
                                                                    <h6 class="mt-0 mb-0"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</h6>
                                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo.</small></p>
                                                                </li>
                                                            </ul>
                                                            <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab14">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                            <img class="img-fullwidth" src="images/services/4.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="service-content">
                                                            <h3 class="sub-title mb-0 mt-15">Services</h3>
                                                            <h1 class="title mt-0">Dental</h1>
                                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque.</p>
                                                            <div class="row mb-20">
                                                                <div class="col-md-6">
                                                                    <ul class="mt-10">
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <ul class="mt-10">
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab15">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                            <img class="img-fullwidth" src="images/services/5.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="service-content">
                                                            <h3 class="sub-title mb-0 mt-15">Services</h3>
                                                            <h1 class="title mt-0">Haematology</h1>
                                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque.</p>
                                                            <div class="row mb-20">
                                                                <div class="col-md-6">
                                                                    <ul class="mt-10">
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <ul class="mt-10">
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                                        <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
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
                </section>

                <!-- Section: Doctors -->
                <section id="doctors">
                    <div class="container pb-50">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase mt-0 line-height-1">Our Doctors</h2>
                                    <div class="title-icon">
                                        <img class="mb-10" src="images/title-icon.png" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row multi-row-clearfix">
                            <div class="col-md-12">
                                <div class="owl-carousel-4col" data-nav="true">
                                    <div class="item">
                                        <div class="hover-effect mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="images/team/1.jpg">
                                                <div class="hover-link">
                                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details p-15 pt-10 pb-10">
                                                <h4 class="title">Dr. Smile Jhon</h4>
                                                <h6 class="sub-title">Orthopaedics</h6>
                                                <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="hover-effect mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="images/team/2.jpg">
                                                <div class="hover-link">
                                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details p-15 pt-10 pb-10">
                                                <h4 class="title">Dr. Smile Jhon</h4>
                                                <h6 class="sub-title">Orthopaedics</h6>
                                                <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="hover-effect mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="images/team/3.jpg">
                                                <div class="hover-link">
                                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details p-15 pt-10 pb-10">
                                                <h4 class="title">Dr. Smile Jhon</h4>
                                                <h6 class="sub-title">Orthopaedics</h6>
                                                <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="hover-effect mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="images/team/4.jpg">
                                                <div class="hover-link">
                                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details p-15 pt-10 pb-10">
                                                <h4 class="title">Dr. Smile Jhon</h4>
                                                <h6 class="sub-title">Orthopaedics</h6>
                                                <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="hover-effect mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="images/team/3.jpg">
                                                <div class="hover-link">
                                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details p-15 pt-10 pb-10">
                                                <h4 class="title">Dr. Smile Jhon</h4>
                                                <h6 class="sub-title">Orthopaedics</h6>
                                                <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Funfact -->
                <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="funfact">
                                    <i class="pe-7s-smile text-black-light mt-20 font-48 pull-left flip"></i>
                                    <div class="ml-60">
                                        <h2 class="animate-number text-theme-colored mt-0 mb-10 pb-20 font-48 line-bottom" data-value="754" data-animation-duration="2000">0</h2>
                                        <div class="clearfix"></div>
                                        <h4>Happy Patients</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="funfact">
                                    <i class="pe-7s-rocket text-black-light mt-20 font-48 pull-left flip"></i>
                                    <div class="ml-60">
                                        <h2 class="animate-number text-theme-colored mt-0 mb-10 pb-20 font-48 line-bottom" data-value="125" data-animation-duration="2500">0</h2>
                                        <div class="clearfix"></div>
                                        <h4>Success Mission</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="funfact">
                                    <i class="pe-7s-add-user text-black-light mt-20 font-48 pull-left flip"></i>
                                    <div class="ml-60">
                                        <h2 class="animate-number text-theme-colored mt-0 mb-10 pb-20 font-48 line-bottom" data-value="150" data-animation-duration="3000">0</h2>
                                        <div class="clearfix"></div>
                                        <h4>Qualified Doctors</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="funfact">
                                    <i class="pe-7s-global text-black-light mt-20 font-48 pull-left flip"></i>
                                    <div class="ml-60">
                                        <h2 class="animate-number text-theme-colored mt-0 mb-10 pb-20 font-48 line-bottom" data-value="55" data-animation-duration="3500">0</h2>
                                        <div class="clearfix"></div>
                                        <h4>Globalization Work</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: testimonials -->
                <section class="bg-light">
                    <div class="container pb-40">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="mt-0 text-uppercase font-28">Testimonials <span class="font-30 text-theme-colored"></span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <div class="owl-carousel-2col boxed" data-dots="true">
                                    <div class="item">
                                        <div class="testimonial sm-text-center pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20 sm-pull-none">
                                                <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                                            </div>
                                            <div class="ml-100 ml-sm-0">
                                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                                                <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial sm-text-center pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20 sm-pull-none">
                                                <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                                            </div>
                                            <div class="ml-100 ml-sm-0">
                                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                                                <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial sm-text-center pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20 sm-pull-none">
                                                <img width="75" class="img-circle" alt="" src="images/testimonials/3.jpg">
                                            </div>
                                            <div class="ml-100 ml-sm-0">
                                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                                                <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial sm-text-center pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20 sm-pull-none">
                                                <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                                            </div>
                                            <div class="ml-100 ml-sm-0">
                                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                                                <p class="author mt-20">- <span class="text-black-333">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: blog -->
                <section id="blog">
                    <div class="container">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-weight-300 m-0">What we can do?</h5>
                                    <h2 class="mt-0 text-uppercase font-28">Latest <span class="text-theme-colored font-weight-400">News</span> <span class="font-30 text-theme-colored">.</span></h2>
                                    <div class="icon">
                                        <i class="fa fa-hospital-o"></i>
                                    </div>

                                </div>
                                <div class="col-md-6"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus hic suscipit doloremque deleniti ipsa quia dolor</p></div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <article class="post clearfix mb-sm-30 bg-lighter">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> 
                                                <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                                            </div>
                                        </div>
                                        <div class="entry-content p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                                            <a href="#" class="btn-read-more">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <article class="post clearfix mb-sm-30 bg-lighter">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> 
                                                <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> 
                                            </div>
                                        </div>
                                        <div class="entry-content p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                                            <a href="#" class="btn-read-more">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <article class="post clearfix bg-lighter">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> 
                                                <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> 
                                            </div>
                                        </div>
                                        <div class="entry-content p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                                            <a href="#" class="btn-read-more">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content -->

            <!-- Footer -->
            <footer id="footer" class="footer bg-black-222">
                <div class="container pt-70 pb-40">
                    <div class="row border-bottom-black">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
                                <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                                <ul class="list-inline mt-5">
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Latest News</h5>
                                <div class="latest-posts">
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                            <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                            <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                            <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Useful Links</h5>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Donor Privacy Policy</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Opening Hours</h5>
                                <div class="opening-hours">
                                    <ul class="list-border">
                                        <li class="clearfix"> <span> Mon - Tues :  </span>
                                            <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Wednes - Thurs :</span>
                                            <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Fri : </span>
                                            <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Sun : </span>
                                            <div class="value pull-right"> Colosed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-5">
                            <div class="widget dark">
                                <h5 class="widget-title mb-10">Subscribe Us</h5>
                                <!-- Mailchimp Subscription Form Starts Here -->
                                <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                                    <div class="input-group">
                                        <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                                        <span class="input-group-btn">
                                            <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                                <!-- Mailchimp Subscription Form Validation-->
                                <script type="text/javascript">
                                    $('#mailchimp-subscription-form-footer').ajaxChimp({
                                        callback: mailChimpCallBack,
                                        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                                    });

                                    function mailChimpCallBack(resp) {
                                        // Hide any previous response text
                                        var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                                                $response = '';
                                        $mailchimpform.children(".alert").remove();
                                        if (resp.result === 'success') {
                                            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                        } else if (resp.result === 'error') {
                                            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                        }
                                        $mailchimpform.prepend($response);
                                    }
                                </script>
                                <!-- Mailchimp Subscription Form Ends Here -->
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <div class="widget dark">
                                <h5 class="widget-title mb-10">Call Us Now</h5>
                                <div class="text-gray">
                                    +61 3 1234 5678 <br>
                                    +12 3 1234 5678
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title mb-10">Connect With Us</h5>
                                <ul class="styled-icons icon-dark icon-circled icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg-black-333">
                    <div class="container pt-20 pb-20">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="widget no-border m-0">
                                    <ul class="list-inline sm-text-center mt-5 font-12">
                                        <li>
                                            <a href="#">FAQ</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <a href="#">Help Desk</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <a href="#">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>

    </body>
</html>
