<div class="col-md-4">
    <img class="img-fullwidth" src="http://placehold.it/270x185" alt="">
</div>
<div class="col-md-4">
    <h3 class="line-bottom mt-0 mb-30">Consultation</h3>
    <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Incidunt quasi tenetur perspiciatis deserunt.</p>-->
    <p>Please send us any questions related to your health and beauty care and our experts will be happy to help you.</p>
    <ul class="list angle-double-right">
        <li><strong>Address:</strong> <?= $Contacts['address'] ?></li>
        <li><strong>Phone:</strong> <?= $Contacts['hotline'] ?></li>
        <li><strong>Email:</strong><a href="mailto:<?= $Contacts['email'] ?>"> <?= $Contacts['email'] ?></a></li>
    </ul>
</div>
<div class="col-md-4">
    <h3 class="line-bottom mt-0 mb-10 mt-sm-30">Ask our doctors:</h3>
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