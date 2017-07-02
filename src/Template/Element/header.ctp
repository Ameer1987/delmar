<style>
    /* Custom dropdown */
    @import url(//fonts.googleapis.com/css?family=Raleway);
    .custom-sel a {
        text-decoration: none;
        text-transform: uppercase;
        margin: 0;
        padding: 10px;
        text-align: left;
        font-family: 'Raleway';
        color: white;
        font-size: 15px;
        font-weight: 700;
        line-height: 24px;
        display: block;
    }

    .custom-sel a:hover {
        text-decoration: none;
        background-color: #1296cc;
        color: #546e7a;
    }

    .custom-sel a.selected {
        background-color: transparent;
    }

    .custom-sel a.selected:hover {
        background-color: transparent;
        color: #546e7a;
    }

    .hidden {
        display: none;
    }

    .lightblue {
        color: white;
        margin-left: -4px;
    }

    .show-sel {
        background-color: #1296cc;
        box-shadow: -5px 0px 65px 0px rgba(0, 0, 0, 0.18);
        position: absolute;
        z-index: 100;
    }

    .custom-sel {
        /*margin: 30px;*/
        display: inline-block;
    }
    /* Custom dropdown */
</style>

<header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Custom dropdown -->
                    <div class="custom-sel">
                        <a class="selected" href="#">ENG &nbsp;<i class="fa fa-caret-down lightblue" aria-hidden="true"></i></a>
                        <a class="hidden" href="#">ARA</a>
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
                        <li><a href="#services">Services</a></li>
                        <li><a href="#departments">Departments</a></li>
                        <li><a href="#doctors">Doctors</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    $(document).ready(function () {
        // Show dropdown
        $('.selected').click(function () {
            $('.custom-sel').addClass('show-sel');
            $('.custom-sel a').removeClass('hidden');
        });

        // Hide dropdown when not focused
        $('.custom-sel').focusout(function () {
            $('.custom-sel').removeClass('show-sel');
            $('.custom-sel a:not(:first)').addClass('hidden');
        }).blur(function () {
            $('.custom-sel').removeClass('show-sel');
            $('.custom-sel a:not(:first)').addClass('hidden');
        });

    });
</script>