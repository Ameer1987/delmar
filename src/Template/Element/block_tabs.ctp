<ul class="nav nav-tabs">
    <?php $index = 0; ?>
    <?php foreach ($BlockTabs as $BlockTab): ?>
        <?php if ($BlockTab['locale'] == $this->request->session()->read('lang')): ?>
            <?php $index ++; ?>
            <li class="<?= $index == 1 ? "active" : "" ?>"><a href="#tab1<?= $index ?>" data-toggle="tab"><i class="<?= $BlockTab['header_icon'] ?>"></i><span><?= $BlockTab['header_title'] ?></span></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<div class="tab-content">
    <?php $index = 0; ?>
    <?php foreach ($BlockTabs as $BlockTab): ?>
        <?php if ($BlockTab['locale'] == $this->request->session()->read('lang')): ?>
            <?php $index ++; ?>
            <div class="tab-pane fade <?= $index == 1 ? "in active" : "" ?>" id="tab1<?= $index ?>">
                <div class="row">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img class="img-fullwidth" src="<?= str_replace("webroot/", "", $BlockTab['dir']) . $BlockTab['photo'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-content">
                            <h3 class="sub-title mb-0 mt-15"><?= $BlockTab['subtitle'] ?></h3>
                            <h1 class="title mt-0"><?= $BlockTab['title'] ?></h1>
                            <p>
                                <?= $BlockTab['text'] ?>
                            </p>

                            <?php if ($BlockTab['blog_id']): ?>
                                <a class="btn btn-dark btn-theme-colored" href="<?= $this->Url->build(["controller" => "Pages", "action" => "viewBlog", $BlockTab['blog_id']]) ?>">View Details</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>