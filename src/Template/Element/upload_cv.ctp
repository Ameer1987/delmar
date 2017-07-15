<div class="row">
    <div class="col-md-12">
        <div class="bg-lightest border-1px p-30 mb-0">
            <h3 class="text-theme-colored mt-0 pt-5"> Send your C.V</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
            <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Name <small>*</small></label>
                            <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Email <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Sex <small>*</small></label>
                            <select name="form_sex" class="form-control required">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Job title <small>*</small></label>
                            <input name="form_job" type="text" placeholder="Enter Job" required="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message <small>*</small></label>
                    <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                </div>
                <div class="form-group">
                    <label>C/V Upload</label>
                    <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                    <small>Maximum upload file size: 2 MB</small>
                </div>
                <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
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