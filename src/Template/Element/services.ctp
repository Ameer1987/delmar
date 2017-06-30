<?php foreach ($Services as $i => $Service): ?>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="icon-box left media p-0">
            <a href="#" class="media-left pull-left"><img src="images/flaticon-png-medical/small/blood-transfusion.png" alt="" width="64"></a>
            <div class="media-body">
                <h5 class="media-heading heading"><?= $Service['title'] ?></h5>
                <p><?= $Service['text'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
