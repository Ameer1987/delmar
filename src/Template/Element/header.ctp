
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
                            <?= strtoupper(substr($this->request->session()->read('lang'), 0, 3)) ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach (['English', 'Arabic'] as $locale): ?>
                                <li <?= $locale == $this->request->session()->read('lang') ? 'class="active"' : '' ?>>
                                    <a href="<?= $this->Url->build(["controller" => 'Pages', "action" => 'switchLang', $locale]) ?>">
                                        <?= strtoupper(substr($locale, 0, 3)) ?>
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
                    <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                        <img src="images/logo-wide.png" alt="">
                    </a>
                    <ul class="menuzord-menu onepage-nav">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contacts">Contact</a></li>
                        <li><a href="#branches">Branches</a></li>
                        <li><a href="#offers">Offers</a></li>
                        <li><a href="#consultation">Consultation</a></li>
                        <li><a href="#activities">Activities</a></li>
                        <li><a href="#doctors">Doctors</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#news">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
