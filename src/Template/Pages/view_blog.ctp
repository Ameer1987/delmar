<?php
$this->layout = 'pages';
?>

<!-- Start main-content -->
<div class="main-content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img class="pull-left mr-15 thumbnail" src="../../images/test.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <h4 class="widget-title line-bottom"><?= $Blog['title_1'] ?></h4>
                    <p><?= $Blog['description_1'] ?></p>
                </div>

                <div class="col-md-12">
                    <div class="clearfix"></div>
                    <h4><?= $Blog['title_2'] ?></h4>
                    <p><?= $Blog['description_2'] ?></p>
                    <div class="separator separator-rouned">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                <div class="gallery-item pull-left">
                                    <a href="../../images/test.jpg" data-lightbox="gallery-item" title="Title Here 1">
                                        <img src="../../images/test.jpg" alt="">
                                    </a>
                                </div>
                                <div class="gallery-item pull-left">
                                    <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 1">
                                        <img src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="gallery-item pull-left">
                                    <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 1">
                                        <img src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="gallery-item pull-left">
                                    <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 1">
                                        <img src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-rouned">
                        <i class="fa fa-cog"></i>
                    </div>
                    <h4><?= $Blog['title_3'] ?></h4>
                    <p><?= $Blog['description_3'] ?></p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

