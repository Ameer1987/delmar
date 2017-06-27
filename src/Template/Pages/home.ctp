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
            <div class="section-content">
                <div class="row">
                    <?= $this->element('small_image_boxes') ?>
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
                    <div class="owl-carousel-4col" data-nav="true">
                        <?= $this->element('large_image_boxes') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

