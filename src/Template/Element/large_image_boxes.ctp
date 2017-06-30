<?php foreach ($LargeImageBoxes as $LargeImageBox): ?>
    <div class="item">
        <article class="post clearfix mb-sm-30 bg-lighter">
            <div class="entry-header">
                <div class="post-thumb thumb"> 
                    <img src="../images/logo-wide-white@2x.png" alt="" class="img-responsive img-fullwidth"> 
                </div>
            </div>
            <div class="entry-content p-20 pr-10">
                <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                            <li class="font-16 text-white font-weight-600 border-bottom"><?= date("d", strtotime($LargeImageBox['blog']['updated_at'])) ?></li>
                            <li class="font-12 text-white text-uppercase"><?= date("M", strtotime($LargeImageBox['blog']['updated_at'])) ?></li>
                        </ul>
                    </div>
                    <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?= $LargeImageBox['title'] ?></a></h4>
                        </div>
                    </div>
                </div>
                <p class="mt-10"><?= $LargeImageBox['text'] ?></p>
                <a href="#" class="btn-read-more">Read more</a>
                <div class="clearfix"></div>
            </div>
        </article>
    </div>
<?php endforeach; ?>