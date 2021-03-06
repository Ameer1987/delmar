<?php foreach ($SmallImageBoxes as $SmallImageBox): ?>
    <?php if ($SmallImageBox['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="<?= str_replace("webroot/", "", $SmallImageBox['dir']) . $SmallImageBox['photo'] ?>">
            </div>
            <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title mt-0 line-bottom"><?= $SmallImageBox['title'] ?></h4>
                <p class="desc mb-10"><?= $SmallImageBox['text'] ?></p>

                <?php if ($SmallImageBox['blog_id']): ?>
                    <a href="<?= $this->Url->build(["controller" => "Pages", "action" => "viewBlog", $SmallImageBox['blog_id']]) ?>" class="btn-read-more">Read more</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>