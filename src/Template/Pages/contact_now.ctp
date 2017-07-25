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
                        <li><a target="_blank" href="<?= $Contacts['facebook'] ?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['twitter'] ?>" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['google_plus'] ?>" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['instagram'] ?>" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?= $Contacts['linkedin'] ?>" data-bg-color="#3B5998"><i class="fa fa-linkedin text-white"></i></a></li>
                    </ul>

                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Headquarter Location</h5>
                            <p><?= $Contacts['address'] ?></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Call center</h5>
                            <p><?= $Contacts['hotline'] ?></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="mailto:<?= $Contacts['email_contacts'] ?>">Email: <?= $Contacts['email_contacts'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

