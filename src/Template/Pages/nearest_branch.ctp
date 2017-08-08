<?php
$this->layout = 'pages';
?>
<style>
    .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    .controls:focus {
        border-color: #4d90fe;
    }

</style>
<!-- Start main-content -->
<div class="main-content">
    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <?php foreach ($SliderBranches as $SliderBranch): ?>
                    <?php if ($SliderBranch['locale'] == $this->request->session()->read('lang')): ?>
                        <?php $branchLocation = json_encode(array($SliderBranch['google_map_title'], $SliderBranch['latitude'], $SliderBranch['longitude'])); ?>
                        <?php $branchInfo = json_encode(array($SliderBranch['google_map_desc'])); ?>
                        <?php $branchMarker = json_encode(array('../images/map-marker.png')); ?>
                        <input type="hidden" class="branch_location" value='<?= $branchLocation ?>' />
                        <input type="hidden" class="branch_info" value='<?= $branchInfo ?>' />
                        <input type="hidden" class="branch_marker" value='<?= $branchMarker ?>' />
                    <?php endif; ?>
                <?php endforeach; ?>
                <!-- Google Map HTML Codes -->
                <input id="pac-input" class="controls" type="text" placeholder="<?= __('Enter a location') ?>">
                <div 
                    id="map-canvas-multipointer"
                    data-mapstyle="default"
                    data-height="500"
                    data-zoom="12"
                    data-marker="../images/map-marker.png">
                </div>
                <!-- Google Map Javascript Codes -->
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyA7H5g416Y6e69e_1fj7uYamnxsGFk3-L8&libraries=places"></script>
                <script src="../js/google-map-init-multilocation.js"></script>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0"><?= __('Get in touch with us') ?></h3>
                    <p><?= __('For any inquiries') ?></p>
                    <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                        <li><a target="_blank" href="<?= $Contacts['facebook'] ?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['twitter'] ?>" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['google_plus'] ?>" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['instagram'] ?>" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['linkedin'] ?>" data-bg-color="#3B5998"><i class="fa fa-linkedin text-white"></i></a></li>
                    </ul>

                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0"><?= __('Headquarter Location') ?></h5>
                            <p><?= $this->request->session()->read('lang') == "English" ? $Contacts['address_en'] : $Contacts['address_ar'] ?></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0"><?= __('Call center') ?></h5>
                            <p><?= $this->request->session()->read('lang') == "English" ? $Contacts['hotline_en'] : $Contacts['hotline_ar'] ?></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0"><?= __('Email') ?></h5>
                            <p><a href="mailto:<?= $Contacts['email_contacts'] ?>"><?= $Contacts['email_contacts'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

