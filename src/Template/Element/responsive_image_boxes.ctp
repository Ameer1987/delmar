<?php foreach ($ResponsiveImageBoxes as $ResponsiveImageBox): ?>
    <?php if ($ResponsiveImageBox['locale'] == $this->request->session()->read('lang')): ?>
        <div class="item">
            <div class="hover-effect mb-30">
                <div class="thumb">
                    <img class="img-fullwidth" alt="" src="../images/logo-wide-white@2x.png">
                </div>
                <div class="details p-15 pt-10 pb-10">
                    <h4 class="title"><?= $ResponsiveImageBox['title'] ?></h4>
                    <h6 class="sub-title"><?= $ResponsiveImageBox['subtitle'] ?></h6>
                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>