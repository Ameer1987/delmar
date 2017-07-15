<?php foreach ($SliderBranches as $SliderBranch): ?>
    <?php if ($SliderBranch['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="row-fluid">
                <div class="col-md-12">
                    <img src="<?= str_replace("webroot/", "", $SliderBranch['dir']) . $SliderBranch['photo'] ?>" alt="">
                </div>
                <div class="col-md-12">
                    <h5 class="mb-0 text-black-999"><?= $SliderBranch['subtitle'] ?></h5>
                    <h2 class="line-bottom mt-0"><?= $SliderBranch['title'] ?></h2>
                    <p class="lead"><?= $SliderBranch['text'] ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
