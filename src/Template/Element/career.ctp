<?php $index = 0; ?>
<?php foreach ($Careers as $Career): ?>
    <?php if ($Career['locale'] == $this->request->session()->read('lang')): ?>
        <?php $index ++; ?>
        <div class="row mb-60">
            <div class="col-md-3">
                <div class="job-overview">
                    <dl class="dl-horizontal">
                        <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                        <dd>
                            <h5 class="mt-0">Date Posted:</h5>
                            <p><?= $Career['created_at'] ?></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                        <dd>
                            <h5 class="mt-0">Location:</h5>
                            <p><?= $Career['location'] ?></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                        <dd>
                            <h5 class="mt-0">Job Title:</h5>
                            <p><?= $Career['title'] ?></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                        <dd>
                            <h5 class="mt-0">Salary:</h5>
                            <p><?= $Career['salary'] ?></p>
                        </dd>
                    </dl>
                    <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#myModal-<?= $index ?>" href="#"><?= __('Apply Now') ?></a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?= $index ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content p-30 pt-10">
                                <h3 class="text-center text-theme-colored mb-20"><?= __('Apply Now') ?></h3>
                                <form id="job_apply_form_<?= $index ?>" name="job_apply_form_<?= $index ?>" action="/pages/send-mail-career" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= __('Name') ?><small>*</small></label>
                                                <input name="form_name" type="text" placeholder="<?= __('Enter') ?> <?= __('Name') ?>" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="form_email"><?= __('Email') ?><small>*</small></label>
                                                <input name="form_email" class="form-control required email" type="email" placeholder="<?= __('Enter') ?> <?= __('Email') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">               
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= __('Sex') ?><small>*</small></label>
                                                <select name="form_sex" class="form-control required">
                                                    <option value="Male"><?= __('Male') ?></option>
                                                    <option value="Female"><?= __('Female') ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= __('Job title') ?><small>*</small></label>
                                                <input name="form_job" type="text" placeholder="<?= __('Enter') ?> <?= __('Job title') ?>" required="" class="form-control" value="<?= $Career['title'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label><?= __('Message') ?><small>*</small></label>
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
                </div>
            </div>
            <div class="col-md-9">
                <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                        <i class="pe-7s-users"></i>
                    </a>
                    <h3 class="icon-box-title pt-15 mt-0 mb-40"><?= $Career['title'] ?></h3>
                    <hr>
                    <p><?= $Career['description'] ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Job Form Validation-->
<script type="text/javascript">
    $("[id^=job_apply_form]").validate({
        submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            $(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none; cursor: pointer;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow').on('click', function () {
                        $(this).fadeOut();
                    });
                }
            });
        }
    });
</script>