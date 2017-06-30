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
    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <div 
                    id="map-canvas-multipointer"
                    data-mapstyle="default"
                    data-height="500"
                    data-zoom="12"
                    data-marker="images/map-marker.png">
                </div>
                <!-- Google Map Javascript Codes -->
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyA7H5g416Y6e69e_1fj7uYamnxsGFk3-L8"></script>
                <script src="../js/google-map-init-multilocation.js"></script>

            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0 mb-30">Send Us a Message:</h3>

                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Subject <small>*</small></label>
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                        </div>
                    </form>

                    <!-- Contact Form Validation-->
                    <script type="text/javascript">
                        $("#contact_form").validate({
                            submitHandler: function (form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function (data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function () {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0">Get in touch with us</h3>
                    <p>For any inquiries, please feel free to contact us using any of the contacts below.</p>
                    <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                        <li><a target="_blank" href="<?= $SocialLinks['facebook'] ?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?= $SocialLinks['twitter'] ?>" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="<?= $SocialLinks['google_plus'] ?>" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="<?= $SocialLinks['instagram'] ?>" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?= $SocialLinks['linkedin'] ?>" data-bg-color="#3B5998"><i class="fa fa-linkedin text-white"></i></a></li>
                    </ul>

                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Headquarter Location</h5>
                            <p>HQ Techno Pharm Egypt Ltd. (5 Emad El Din - Downtown)</p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Call center</h5>
                            <p><a href="tel:19955">(19955) hotline to call 24 hours</a></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="mailto:INFO@delmar-attalla.com">Email: INFO@delmar-attalla.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

