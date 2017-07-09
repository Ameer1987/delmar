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
    <?php if (count($HomeSliders) > 0): ?>
        <section id="home" class="divider">
            <div class="container-fluid p-0">
                <?= $this->element('home_sliders') ?>
            </div>
        </section>
    <?php endif ?>

    <!-- Section: home-boxes -->
    <?php if (count($HomeBoxes) > 0): ?>
        <section>
            <div class="container pt-0 pb-0">
                <?= $this->element('home_boxes') ?>
            </div>
        </section>
    <?php endif ?>

    <!-- Section: Text Blocks -->
    <?php if (count($TextBlocks) > 0): ?>
        <section id="about">
            <div class="container pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1">About us</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>We offer our customers the best of everything from prescribed <br/> medicine,cosmetics and personal care products.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row" style="display: inline;">
                        <?= $this->element('text_blocks') ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Section: -->
    <section data-bg-img="images/pattern/p5.png" id="contacts">
        <div class="container pb-70" id="branches">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Our branches</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                        <!--<p>&nbsp;</p>-->
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="border-10px p-30 bg-white">
                            <h5><i class="fa fa-clock-o text-theme-colored"></i> Contact Us </h5>
                            <div class="opening-hours text-left">
                                <ul class="list-unstyled">
                                    <li class="clearfix"> 
                                        <span> <?= $Contacts['address'] ?> </span>
                                    </li>
                                    <li class="clearfix line-height-1"> 
                                        <span> <?= $Contacts['hotline'] ?> </span>
                                    </li>
                                    <li class="clearfix line-height-1" style="border: none;"> 
                                        <span><a href="mailto:<?= $Contacts['email'] ?>"> Email: <?= $Contacts['email'] ?> </a></span>
                                    </li>
                                </ul>
                            </div>
                            <a target="_blank" href="<?= $this->Url->build(["controller" => "Pages", "action" => "contactNow"]); ?>" class="btn btn-dark btn-theme-colored btn-sm mt-10" style="font-size: 16px;">Get your nearest branch</a>
                            <h5 class="mt-30"><i class="fa fa-pencil-square-o text-theme-colored"></i> Need Help?</h5>
                            <p class="mt-0">For any needed information, feedback or complaints.</p>
                            <a target="_blank" href="<?= $this->Url->build(["controller" => "Pages", "action" => "contactNow"]); ?>" class="btn btn-dark btn-theme-colored btn-sm">Contact Now</a>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="owl-carousel-1col owl-dots-bottom-right" data-dots="true">
                            <?= $this->element('slider_branches') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: small-image-boxes  -->
    <?php if (count($SmallImageBoxes) > 0): ?>
        <section id="offers">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="mt-0 text-uppercase font-28">Featured <span class="text-theme-colored font-weight-400">offers</span> <span class="font-30 text-theme-colored">.</span></h2>
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
    <?php endif ?>

    <!-- Divider: Consultation -->
    <section class="divider" id="consultation">
        <div class="container">
            <div class="row pt-30">
                <?= $this->element('consultation') ?>
            </div>
        </div>
    </section>

    <!-- Section: magazines  -->
    <section id="magazines">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Magazines</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-nav="true" data-duration="100000000000">
                        <?= $this->element('magazines') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Doctors -->
    <?php if (count($ResponsiveImageBoxes) > 0): ?>
        <section id="doctors">
            <div class="container pb-50">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1">Recommended Doctors</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>A list of VIP doctors we recommend for our customers</p>
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
    <?php endif; ?>

    <!-- Divider: Statistics -->
    <?php if ($Statistics['title_1'] || $Statistics['title_2'] || $Statistics['title_3'] || $Statistics['title_4'] || $Statistics['number_1'] || $Statistics['number_2'] || $Statistics['number_3'] || $Statistics['number_4']): ?>
        <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="<?= str_replace("webroot/", "", $Statistics['dir']) . $Statistics['photo'] ?>">
            <div class="container">
                <div class="row">
                    <?= $this->element('statistics') ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Divider: testimonials -->
    <?php if (count($Testimonials) > 0): ?>
        <section class="bg-light" id="testimonials">
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
    <?php endif; ?>

    <!-- Section: block tabs -->
    <?php if (count($BlockTabs) > 0): ?>
        <section data-bg-img="images/pattern/p4.png" id="news">
            <div class="container pb-70">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1">Latest News</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <!--<p>&nbsp;</p>-->
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
    <?php endif; ?>

    <!-- Section: large-image-boxes  -->
    <?php if (count($LargeImageBoxes) > 0): ?>
        <section data-bg-img="images/pattern/p4.png">
            <div class="container pt-0">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col" data-nav="true" data-duration="100000000000">
                            <?= $this->element('large_image_boxes') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Section: career  -->
    <section id="career">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Career</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <?= $this->element('career') ?>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

