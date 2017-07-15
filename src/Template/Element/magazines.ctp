<?php foreach ($Magazines as $Magazine): ?>
    <?php if ($Magazine['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item text-center">
            <div class="hover-effect mb-30">
                <div class="thumb" style="cursor: pointer;">
                    <a href="#">
                        <img class="img-fullwidth" alt="<?= $Magazine['title'] ?>" title="<?= $Magazine['title'] ?>" 
                             src="<?= str_replace("webroot/", "", $Magazine['cover_dir']) . $Magazine['cover_img'] ?>">
                    </a>
                </div>
                <div class="details p-15 pt-10 pb-10">
                    <h4 class="title"><?= $Magazine['title'] ?></h4>
                    <h6 class="sub-title"><?= $Magazine['description'] ?></h6>
                    <a class="btn btn-theme-colored btn-sm" href="#">Download as pdf</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

