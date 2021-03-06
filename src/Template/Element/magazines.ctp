<?php foreach ($Magazines as $Magazine): ?>
    <?php if ($Magazine['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item text-center">
            <div class="hover-effect mb-30">
                <a target="_blank" href="<?= str_replace("webroot/", "", $Magazine['folder_dir']) ?>magazine_<?= $Magazine['id'] ?>/<?= str_replace(".zip", "", $Magazine['folder']) ?>/index.html">
                    <div class="thumb" style="cursor: pointer; max-height: 400px;">
                        <img class="img-fullwidth" alt="<?= $Magazine['title'] ?>" title="<?= $Magazine['title'] ?>" 
                             src="<?= str_replace("webroot/", "", $Magazine['cover_dir']) . $Magazine['cover_img'] ?>">
                    </div>
                </a>
                <div class="details p-15 pt-10 pb-10">
                    <h4 class="title"><?= $Magazine['title'] ?></h4>
                    <h6 class="sub-title"><?= $Magazine['description'] ?></h6>
                    <a class="btn btn-theme-colored btn-sm" 
                       href="<?= str_replace("webroot/", "", $Magazine['pdf_dir']) . $Magazine['pdf'] ?>"
                       download="<?= str_replace("webroot/", "", $Magazine['pdf_dir']) . $Magazine['pdf'] ?>">
                           <?= __('Download as pdf') ?>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

