<?php for ($i = 1; $i < 5; $i++): ?>
    <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="funfact">
            <div class="ml-60">
                <h2 class="animate-number text-theme-colored mt-0 mb-10 pb-20 font-48 line-bottom" data-value="<?= $Statistics['number_' . $i] ?>" data-animation-duration="3500"><?= $Statistics['number_' . $i] ?></h2>
                <div class="clearfix"></div>
                <h4><?= $Statistics['title_' . $i] ?></h4>
            </div>
        </div>
    </div>
<?php endfor; ?>