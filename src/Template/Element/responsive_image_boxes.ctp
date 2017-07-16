<?php foreach ($ResponsiveImageBoxes as $ResponsiveImageBox): ?>
    <?php if ($ResponsiveImageBox['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="hover-effect mb-30">
                <div class="thumb">
                    <img class="img-fullwidth" alt="" src="<?= str_replace("webroot/", "", $ResponsiveImageBox['dir']) . $ResponsiveImageBox['photo'] ?>">
                </div>
                <div class="details p-15 pt-10 pb-10">
                    <h4 class="title"><?= $ResponsiveImageBox['title'] ?></h4>
                    <h6 class="sub-title"><?= $ResponsiveImageBox['subtitle'] ?></h6>

                    <?php if ($ResponsiveImageBox['blog_id']): ?>
                        <a class="btn btn-theme-colored btn-sm" href="<?= $this->Url->build(["controller" => "Pages", "action" => "viewBlog", $ResponsiveImageBox['blog_id']]) ?>">view details</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>