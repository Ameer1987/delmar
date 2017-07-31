<?php
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
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('About us') ?></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p><?= __('About us intro') ?></p>
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
                        <h2 class="text-uppercase mt-0 line-height-1"><?= __('Contact Us') ?> - <?= __('Our branches') ?></h2>
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
                            <h5><i class="fa fa-clock-o text-theme-colored"></i><?= __('Contact Us') ?></h5>
                            <div class="opening-hours text-left">
                                <?php $textAlign = $this->request->session()->read('lang') == "English" ? '' : "text-align: right;" ?>
                                <ul class="list-unstyled">
                                    <li class="clearfix"> 
                                        <span style="<?= $textAlign ?>"> <?= $Contacts['address'] ?> </span>
                                    </li>
                                    <li class="clearfix line-height-1"> 
                                        <span style="<?= $textAlign ?>"> <?= $Contacts['hotline'] ?> </span>
                                    </li>
                                    <li class="clearfix line-height-1" style="border: none;"> 
                                        <span style="<?= $textAlign ?>" class="small">
                                            <a href="mailto:<?= $Contacts['email_contacts'] ?>"> 
                                                <?= __('Email') ?>: 
                                                <?= $Contacts['email_contacts'] ?>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?= $this->Url->build(["controller" => "Pages", "action" => "nearestBranch"]); ?>" class="btn btn-dark btn-theme-colored btn-sm mt-10" style="font-size: 16px;"><?= __('Get your nearest branch') ?></a>
                            <h5 class="mt-30"><i class="fa fa-pencil-square-o text-theme-colored"></i> <?= __('Need Help?') ?></h5>
                            <p class="mt-0"><?= __('For any needed information') ?></p>
                            <a href="<?= $this->Url->build(["controller" => "Pages", "action" => "contactNow"]); ?>" class="btn btn-dark btn-theme-colored btn-sm"><?= __('Contact Now') ?></a>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="owl-carousel-1col owl-dots-bottom-right" data-dots="true" data-duration="100000000000">
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
                            <h2 class="mt-0 text-uppercase font-28"><?= __('Featured') ?> <span class="text-theme-colored font-weight-400"><?= __('offers') ?></span></h2>
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
    <?php if (count($Magazines) > 0): ?>
        <section id="magazines">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('Magazines') ?></h2>
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
    <?php endif; ?>

    <!-- Section: Doctors -->
    <?php if (count($ResponsiveImageBoxes) > 0): ?>
        <section id="doctors">
            <div class="container pb-50">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('Recommended Doctors') ?></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p><?= __('Recommended Doctors intro') ?></p>
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
    <?php // if ($Statistics['title_1'] || $Statistics['title_2'] || $Statistics['title_3'] || $Statistics['title_4'] || $Statistics['number_1'] || $Statistics['number_2'] || $Statistics['number_3'] || $Statistics['number_4']):  ?>
<!--        <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="">
            <div class="container">
                <div class="row">
    <?php // echo $this->element('statistics');  ?>
                </div>
            </div>
        </section>-->
    <?php // endif;  ?>

    <!-- Divider: testimonials -->
    <?php if (count($Testimonials) > 0): ?>
        <section class="bg-light" id="testimonials">
            <div class="container pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 text-uppercase font-28"><?= __('Testimonials') ?><span class="font-30 text-theme-colored"></span></h2>
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
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('Latest News') ?></h2>
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
    <?php if (count($Careers) > 0): ?>
        <section id="career">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('Career') ?></h2>
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
    <?php else: ?>
        <section id="career">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 line-height-1"><?= __('Career') ?></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?= $this->element('upload_cv') ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
<!-- end main-content -->

