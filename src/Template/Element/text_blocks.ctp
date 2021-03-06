<?php $i = 0; ?>
<div class="row">
    <?php foreach ($TextBlocks as $TextBlock): ?>
        <?php if ($TextBlock['locale'] == $this->request->session()->read('lang')): ?>
            <?php $i++; ?>
            <?php if ($i != 1 && $i % 3 == 1): ?>
            </div><div class="row">
            <?php endif; ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="icon-box left media p-0">
                    <?php $cursor = $TextBlock['blog_id'] ? 'cursor: pointer;' : "cursor: default;"; ?>
                    <?php $href = $TextBlock['blog_id'] ? $this->Url->build(["controller" => "Pages", "action" => "viewBlog", $TextBlock['blog_id']]) : "javascript:void(0)"; ?>
                    <a href="<?= $href ?>" class="media-left pull-left" style="<?= $cursor ?>">
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
</div>
