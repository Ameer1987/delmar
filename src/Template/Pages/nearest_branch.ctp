<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->layout = 'pages';
?>

<!-- Start main-content -->
<div class="main-content">
    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container pt-0 pb-0">
            <div class="section-title mt-30 mb-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="esc-heading small-border">
                            <h3>Please choose your location on the map to get the nearest branch:</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="divider">
        <div class="container pt-0 pb-sm-30">
            <div class="row pt-10">
                <div class="col-md-8">
                    <!-- Google Map HTML Codes -->
                    <div 
                        id="map-canvas-multipointer"
                        data-mapstyle="default"
                        data-height="400"
                        data-zoom="12"
                        data-marker="images/map-marker.png">
                    </div>
                    <!-- Google Map Javascript Codes -->
                    <script src="http://maps.google.com/maps/api/js?key=AIzaSyA7H5g416Y6e69e_1fj7uYamnxsGFk3-L8"></script>
                    <script src="../js/google-map-init-multilocation.js"></script>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                                    <p>#405, Lan Streen, Los Vegas, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                    <p>+325 12345 65478</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                                    <p>supporte@yourdomin.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
                                <div class="media-body"> <strong>Make a Video Call</strong>
                                    <p>ThemeMascotSkype</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- end main-content -->

