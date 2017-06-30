<ul class="nav nav-tabs">
    <?php foreach ($BlockTabs as $i => $BlockTab): ?>
        <li class="<?= $i == 0 ? "active" : "" ?>"><a href="#tab1<?= $i ?>" data-toggle="tab"><i class="<?= $BlockTab['header_icon'] ?>"></i><span><?= $BlockTab['header_title'] ?></span></a></li>
    <?php endforeach; ?>
</ul>
<div class="tab-content">
    <?php foreach ($BlockTabs as $i => $BlockTab): ?>
        <div class="tab-pane fade <?= $i == 0 ? "in active" : "" ?>" id="tab1<?= $i ?>">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/services/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-content">
                        <h3 class="sub-title mb-0 mt-15"><?= $BlockTab['subtitle'] ?></h3>
                        <h1 class="title mt-0"><?= $BlockTab['title'] ?></h1>
                        <p>
                            <?= $BlockTab['text'] ?>
                        </p>
                        <a class="btn btn-dark btn-theme-colored" href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>