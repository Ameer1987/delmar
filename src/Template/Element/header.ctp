
<style>
    @import url(//fonts.googleapis.com/css?family=Raleway);
    .current-lang {
        font-family: 'Raleway';
        color: white;
        font-size: 15px;
        font-weight: 700;
    }
</style>

<header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="locale-switcher" class="btn-group">
                        <a class="btn dropdown-toggle current-lang" data-toggle="dropdown" href="#">
                            <?= __(strtoupper(substr($this->request->session()->read('lang'), 0, 3))) ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach (['English', 'Arabic'] as $locale): ?>
                                <li <?= $locale == $this->request->session()->read('lang') ? 'class="active"' : '' ?>>
                                    <a href="<?= $this->Url->build(["controller" => 'Pages', "action" => 'switchLang', $locale]) ?>">
                                        <?= __(strtoupper(substr($locale, 0, 3))) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget no-border m-0">
                        <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                            <li><a target="_blank" href="<?= $Contacts['facebook'] ?>"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a target="_blank" href="<?= $Contacts['twitter'] ?>"><i class="fa fa-twitter text-white"></i></a></li>
                            <li><a target="_blank" href="<?= $Contacts['google_plus'] ?>"><i class="fa fa-google-plus text-white"></i></a></li>
                            <li><a target="_blank" href="<?= $Contacts['instagram'] ?>"><i class="fa fa-instagram text-white"></i></a></li>
                            <li><a target="_blank" href="<?= $Contacts['linkedin'] ?>"><i class="fa fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord blue">
                    <a class="menuzord-brand pull-left flip" href="/" style="margin: 5px 0 0 0;">
                        <img src="../../images/logo-wide.png" alt="Delmar & Attalla" title="Delmar & Attalla" style="max-height: 65px;">
                    </a>
                    <?php $prefix = $this->request->params['action'] != "home" ? "/" : ""; ?>
                    <ul class="menuzord-menu onepage-nav">
                        <li class="active"><a href="<?= $prefix ?>#home"><?= __('Home') ?></a></li>
                        <li><a href="<?= $prefix ?>#about"><?= __('About') ?></a></li>
                        <li><a href="<?= $prefix ?>#contacts"><?= __('Contact') ?></a></li>
                        <li><a href="<?= $prefix ?>#branches"><?= __('Branches') ?></a></li>
                        <li><a href="<?= $prefix ?>#offers"><?= __('Offers') ?></a></li>
                        <li><a href="<?= $prefix ?>#consultation"><?= __('Consultation') ?></a></li>
                        <li><a href="<?= $prefix ?>#magazines"><?= __('Magazines') ?></a></li>
                        <li><a href="<?= $prefix ?>#doctors"><?= __('Doctors') ?></a></li>
                        <li><a href="<?= $prefix ?>#news"><?= __('News') ?></a></li>
                        <li><a href="<?= $prefix ?>#career"><?= __('Career') ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    $('.onepage-nav').on('click', 'li', function () {
        $('.onepage-nav').find('li').removeClass('active');
        $(this).addClass('active');
    })
</script>
