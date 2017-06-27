<div class="section-content">
    <div class="row equal-height-inner home-boxes mt-sm-0" data-margin-top="-100px">
        <?php $index = 0; ?>
        <?php foreach ($HomeBoxes as $HomeBox): ?>
            <?php $index ++; ?>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 fadeInLeft animation-delay<?= $index ?>">
                <div class="sm-height-auto bg-theme-colored<?= $index > 1 ? ("-darker" . $index) : "" ?>">
                    <div class="p-30">
                        <img src="images/flaticon-png-medical/small/antibiotic.png" width="70" alt="">
                        <h4 class="text-uppercase text-white"><?= $HomeBox['title'] ?></h4>
                        <p class="text-white"><?= $HomeBox['text'] ?></p>
                        <a href="<?= $HomeBox['link'] ?>" class="btn btn-border btn-circled btn-transparent btn-sm"><?= $HomeBox['avatar'] ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>