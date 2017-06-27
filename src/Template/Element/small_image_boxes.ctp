<?php foreach ($SmallImageBoxes as $SmallImageBoxe): ?>
    <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
        <div class="image-box-thum">
            <img class="img-fullwidth" alt="" src="images/photos/2.jpg">
        </div>
        <div class="image-box-details pt-20 pb-sm-20">
            <h4 class="title mt-0 line-bottom"><?= $SmallImageBoxe['title'] ?></h4>
            <p class="desc mb-10"><?= $SmallImageBoxe['text'] ?></p>
            <a href="<?= $SmallImageBoxe['link'] ?>" class="btn-read-more">Read more</a>
        </div>
    </div>
<?php endforeach; ?>