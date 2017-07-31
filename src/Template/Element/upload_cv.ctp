<div class="row">
    <div class="col-md-12">
        <div class="bg-lightest border-1px p-30 mb-0">
            <h3 class="text-theme-colored mt-0 pt-5"> <?= __('Send your C.V') ?> </h3>
            <hr>
            <p><?= __('Send your C.V text') ?></p>
            <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label><?= __('Name') ?> <small>*</small></label>
                            <input name="form_name" type="text" placeholder="<?= __('Enter') ?> <?= __('Name') ?>" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label><?= __('Email') ?> <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email" placeholder="<?= __('Enter') ?> <?= __('Email') ?>">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label><?= __('Sex') ?> <small>*</small></label>
                            <select name="form_sex" class="form-control required">
                                <option value="Male"><?= __('Male') ?></option>
                                <option value="Female"><?= __('Female') ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label><?= __('Job title') ?> <small>*</small></label>
                            <input name="form_job" type="text" placeholder="<?= __('Enter') ?> <?= __('Job title') ?>" required="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label><?= __('Message') ?> <small>*</small></label>
                    <textarea name="form_message" class="form-control required" rows="5" placeholder="<?= __('cover letter') ?>"></textarea>
                </div>
                <div class="form-group">
                    <label><?= __('C/V Upload') ?></label>
                    <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                    <small><?= __('Maximum upload size') ?></small>
                </div>
                <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="<?= __('Please wait...') ?>"><?= __('Apply Now') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Job Form Validation-->
<script type="text/javascript">
    $("#job_apply_form").validate({
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