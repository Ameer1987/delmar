<footer id="footer" class="footer bg-black-222">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <img src="../../images/logo-wide-white.png" class="mt-10 mb-20" alt="Delmar & Attalla" 
                         title="Delmar & Attalla" style="max-height: 95px;">
                    <p><?= $this->request->session()->read('lang') == "English" ? $Contacts['address_en'] : $Contacts['address_ar'] ?></p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-colored mr-5"></i><?= $this->request->session()->read('lang') == "English" ? $Contacts['hotline_en'] : $Contacts['hotline_ar'] ?></li>
                        <li class="m-0 pl-10 pr-10"><a href="mailto:<?= $Contacts['email_contacts'] ?>"><i class="fa fa-envelope-o text-theme-colored mr-5"></i><?= $Contacts['email_contacts'] ?></a></li>
                        <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="http://www.delmar-attalla.com">www.delmar-attalla.com </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <h5 class="widget-title mb-10 line-bottom"><?= __('Connect With Us') ?></h5>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10" style="width: 100%;"><a target="_blank" href="<?= $Contacts['facebook'] ?>"> <i class="fa fa-facebook text-theme-colored mr-15 ml-15" style="width: 10px;"></i><?= __('Follow us on facebook') ?></a></li>
                        <li class="m-0 pl-10 pr-10" style="width: 100%;"><a target="_blank" href="<?= $Contacts['twitter'] ?>"> <i class="fa fa-twitter text-theme-colored mr-15 ml-15" style="width: 10px;"></i><?= __('Follow us on twitter') ?></a></li>
                        <li class="m-0 pl-10 pr-10" style="width: 100%;"><a target="_blank" href="<?= $Contacts['linkedin'] ?>"> <i class="fa fa-linkedin text-theme-colored mr-15 ml-15" style="width: 10px;"></i><?= __('Follow us on linkedin') ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom"><?= __('About us') ?></h5>
                    <p>
                        <?= __('About us text') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright font-11">
                        <a rel="nofollow" href="http://rapid-develop.com" target="_blank">
                            Rapid Develop &copy; <span id="copyright-year"></span>
                        </a>
                        Privacy Policy. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>