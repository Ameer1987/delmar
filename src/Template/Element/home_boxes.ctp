<div class="section-content">
    <div class="row equal-height-inner home-boxes mt-sm-0" data-margin-top="-100px">
        <?php $index = 0; ?>
        <?php foreach ($HomeBoxes as $HomeBox): ?>
            <?php if ($HomeBox['locale'] == $this->request->session()->read('lang')): ?>
                <?php $index ++; ?>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 fadeInLeft animation-delay<?= $index ?>">
                    <div class="sm-height-auto bg-theme-colored<?= $index > 1 ? ("-darker" . $index) : "" ?>">
                        <div class="p-30">
                            <img src="<?= str_replace("webroot/", "", $HomeBox['dir']) . $HomeBox['photo'] ?>" width="70" alt="">
                            <h4 class="text-uppercase text-white"><?= $HomeBox['title'] ?></h4>
                            <div class="text-white" style="margin-bottom: 11px;"><?= $HomeBox['text'] ?></div>

                            <?php if ($HomeBox['avatar']): ?>
                                <a href="<?= $this->Url->build(["controller" => "Pages", "action" => "viewBlog", $HomeBox['blog_id']]); ?>" 
                                   class="btn btn-border btn-circled btn-transparent btn-sm">
                                    <?= $HomeBox['avatar'] ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>