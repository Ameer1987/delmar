<div class="row">
    <div class="col-md-3">
        <div class="job-overview">
            <dl class="dl-horizontal">
                <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                    <h5 class="mt-0">Date Posted:</h5>
                    <p>Posted 10 days ago</p>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                    <h5 class="mt-0">Location:</h5>
                    <p>Anywhere</p>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                    <h5 class="mt-0">Job Title:</h5>
                    <p>Finance Manager</p>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                    <h5 class="mt-0">Salary:</h5>
                    <p>$10000 - 13000</p>
                </dd>
            </dl>
            <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#myModal" href="#">Apply Now</a>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content p-30 pt-10">
                        <h3 class="text-center text-theme-colored mb-20">Apply Now</h3>
                        <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sex <small>*</small></label>
                                        <select name="form_sex" class="form-control required">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Job Post <small>*</small></label>
                                        <select name="form_post" class="form-control required">
                                            <option value="Finance Manager">Finance Manager</option>
                                            <option value="Area Manager">Area Manager</option>
                                            <option value="Country Manager">Country Manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message <small>*</small></label>
                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                            </div>
                            <div class="form-group">
                                <label>C/V Upload</label>
                                <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                                <small>Maximum upload file size: 12 MB</small>
                            </div>
                            <div class="form-group">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                            </div>
                        </form>
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
            <h3 class="icon-box-title pt-15 mt-0 mb-40">Finance Manager</h3>
            <hr>
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla.</p>
        </div>
        <h5 class="mt-30">Requirments:</h5>
        <ul class="list theme-colored">
            <li>Lorem ipsum dolor sit elit</li>
            <li>Lorem ipsum dolor sit amet</li>
        </ul>
    </div>
</div>