<?php foreach ($TextBlocks as $TextBlock): ?>
    <?php if ($TextBlock['locale'] == $this->request->session()->read('lang')): ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-box left media p-0">

                <?php $cursor = $TextBlock['blog_id'] ? 'cursor: pointer;' : "cursor: default;"; ?>
                <a href="#" class="media-left pull-left" style="<?= $cursor ?>">
                    <img src="<?= str_replace("webroot/", "", $TextBlock['dir']) . $TextBlock['photo'] ?>" alt="" width="64">
                </a>

                <div class="media-body">
                    <h5 class="media-heading heading"><?= $TextBlock['title'] ?></h5>
                    <p><?= $TextBlock['text'] ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
