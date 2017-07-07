<?php foreach ($Testimonials as $Testimonial): ?>
    <?php if ($Testimonial['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="testimonial sm-text-center pt-10">
                <div class="thumb pull-left mb-0 mr-0 pr-20 sm-pull-none">
                    <img width="75" class="img-circle" alt="" src="<?= str_replace("webroot/", "", $Testimonial['dir']) . $Testimonial['photo'] ?>">
                </div>
                <div class="ml-100 ml-sm-0">
                    <p class="lead"><?= $Testimonial['text'] ?></p>
                    <p class="author mt-20">- <span class="text-black-333"><?= $Testimonial['author_name'] ?>,</span> <small><em><?= $Testimonial['author_job'] ?></em></small></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>