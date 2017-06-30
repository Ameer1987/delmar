<?php foreach ($SliderBranches as $i => $SliderBranch): ?>
    <div class="item">
        <div class="row-fluid">
            <div class="col-md-5">
                <img src="images/team/h1.jpg" alt="">
            </div>
            <div class="col-md-7">
                <h5 class="mb-0 text-black-999"><?= $SliderBranch['subtitle'] ?></h5>
                <h2 class="line-bottom mt-0"><?= $SliderBranch['title'] ?></h2>
                <p class="lead"><?= $SliderBranch['text'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
