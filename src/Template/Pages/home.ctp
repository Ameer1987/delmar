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
$this->layout = 'pages';
?>

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home-sliders -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">
            <?= $this->element('home_sliders') ?>
        </div>
    </section>

    <!-- Section: home-boxes -->
    <section>
        <div class="container pt-0 pb-0">
            <?= $this->element('home_boxes') ?>
        </div>
    </section>

    <!-- Section: small-image-boxes  -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 text-uppercase font-28">Latest <span class="text-theme-colored font-weight-400">offers</span> <span class="font-30 text-theme-colored">.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col" data-nav="true">
                        <?= $this->element('small_image_boxes') ?>
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
                            <?= $this->element('block_tabs') ?>
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
                        <?= $this->element('responsive_image_boxes') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Statistics -->
    <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="../images/Untitled-1.png">
        <div class="container">
            <div class="row">
                <?= $this->element('statistics') ?>
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
                        <?= $this->element('testimonials') ?>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Section: large-image-boxes  -->
    <section id="blog">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 text-uppercase font-28">Latest <span class="text-theme-colored font-weight-400">News</span> <span class="font-30 text-theme-colored">.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-nav="true" data-duration="100000000000">
                        <?= $this->element('large_image_boxes') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

