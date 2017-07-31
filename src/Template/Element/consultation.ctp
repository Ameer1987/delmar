<div class="col-md-4" style="height: 400px; overflow: hidden;">
    <img class="img-fullwidth" src="images/h3.jpg" alt="">
</div>
<div class="col-md-4">
    <h3 class="line-bottom mt-0 mb-30"><?= __('Consultation') ?></h3>
    <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Incidunt quasi tenetur perspiciatis deserunt.</p>-->
    <p><?= __('consultation_text') ?></p>
    <ul class="list angle-double-right">
        <li><strong><?= __('Address') ?>:</strong> <?= $this->request->session()->read('lang') == "English" ? $Contacts['address_en'] : $Contacts['address_ar'] ?></li>
        <li><strong><?= __('Phone') ?>:</strong> <?= $this->request->session()->read('lang') == "English" ? $Contacts['hotline_en'] : $Contacts['hotline_ar'] ?></li>
        <li><strong><?= __('Email') ?>:</strong><a class="small" href="mailto:<?= $Contacts['email_contacts'] ?>"> <?= $Contacts['email_contacts'] ?></a></li>
    </ul>
</div>
<div class="col-md-4">
    <h3 class="line-bottom mt-0 mb-10 mt-sm-30"><?= __('Ask our doctors') ?></h3>
    <!-- Contact Form -->
    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label><?= __('Name') ?>: <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="<?= __('Enter') ?> <?= __('Name') ?>" required="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label><?= __('Email') ?>: <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="<?= __('Enter') ?> <?= __('Email') ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label><?= __('Subject') ?>: <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="<?= __('Enter') ?> <?= __('Subject') ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label><?= __('Phone') ?>:</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="<?= __('Enter') ?> <?= __('Phone') ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label><?= __('Message') ?>:</label>
            <textarea name="form_message" class="form-control required" rows="5" placeholder="<?= __('Enter') ?> <?= __('Message') ?>"></textarea>
        </div>
        <div class="form-group">
            <input name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="<?= __('Please wait...') ?>"><?= __('Send your message') ?></button>
            <button type="reset" class="btn btn-default btn-flat btn-theme-colored"><?= __('Reset') ?></button>
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