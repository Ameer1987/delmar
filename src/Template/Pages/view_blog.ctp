<?php
$this->layout = 'pages';
?>

<!-- Start main-content -->
<div class="main-content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if ($Blog['main_img']): ?>
                        <img class="pull-left mr-15 thumbnail" alt="" title=""
                             src="<?= str_replace("webroot/", "../../", $Blog['main_dir']) . $Blog['main_img'] ?>" >
                         <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if ($Blog['title_1']): ?>
                        <h4 class="widget-title line-bottom"><?= $Blog['title_1'] ?></h4>
                    <?php endif; ?>
                    <?php if ($Blog['desc_1']): ?>
                        <p><?= $Blog['desc_1'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-md-12">
                    <div class="clearfix"></div>
                    <?php if ($Blog['title_2']): ?>
                        <h4><?= $Blog['title_2'] ?></h4>
                    <?php endif; ?>
                    <?php if ($Blog['desc_2']): ?>
                        <p><?= $Blog['desc_2'] ?></p>
                    <?php endif; ?>
                    <?php if ($Blog['img_1'] || $Blog['img_2'] || $Blog['img_3'] || $Blog['img_4']): ?>
                        <div class="separator separator-rouned">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                    <?php for ($i = 1; $i < 5; $i++): ?>
                                        <?php if ($Blog['img_' . $i]): ?>
                                            <div class="gallery-item pull-left">
                                                <a href="<?= str_replace("webroot/", "../../", $Blog['dir_' . $i]) . $Blog['img_' . $i] ?>" 
                                                   data-lightbox="gallery-item">
                                                    <img src="<?= str_replace("webroot/", "../../", $Blog['dir_' . $i]) . $Blog['img_' . $i] ?>" 
                                                         alt="" title="">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-rouned">
                            <i class="fa fa-cog"></i>
                        </div>
                    <?php endif; ?>

                    <?php if ($Blog['title_3']): ?>
                        <h4><?= $Blog['title_3'] ?></h4>
                    <?php endif; ?>
                    <?php if ($Blog['desc_3']): ?>
                        <p><?= $Blog['desc_3'] ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

