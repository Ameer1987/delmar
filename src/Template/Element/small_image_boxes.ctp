<?php foreach ($SmallImageBoxes as $SmallImageBox): ?>
    <?php if ($SmallImageBox['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="../images/Untitled-1.png">
            </div>
            <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title mt-0 line-bottom"><?= $SmallImageBox['title'] ?></h4>
                <p class="desc mb-10"><?= $SmallImageBox['text'] ?></p>
                <a href="#" class="btn-read-more">Read more</a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>