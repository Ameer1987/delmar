<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section class="content-header">
    <h1>
        Blog
        <small><?= __('Edit') ?></small>
    </h1>
    <a class="btn btn-dark mt-20" href="#" data-target="#myModal-1" data-toggle="modal">View template</a>
    <div id="myModal-1" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-30 pt-10">
                <img src="/../../images/template.png" />  
            </div>
        </div>
    </div>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false]) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Form') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($blog, ['type' => 'file']) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('order');
                    echo $this->Form->control('title_1');
                    echo $this->Form->control('title_2');
                    echo $this->Form->control('title_3');
                    echo $this->Ck->input('desc_1');
                    echo $this->Ck->input('desc_2');
                    echo $this->Ck->input('desc_3');
                    echo $this->Form->control('main_img', ['type' => 'file']);
                    $this->Form->input('main_dir', ['type' => 'hidden']);
                    echo $this->Form->control('img_1', ['type' => 'file']);
                    $this->Form->input('dir_1', ['type' => 'hidden']);
                    echo $this->Form->control('img_2', ['type' => 'file']);
                    $this->Form->input('dir_2', ['type' => 'hidden']);
                    echo $this->Form->control('img_3', ['type' => 'file']);
                    $this->Form->input('dir_3', ['type' => 'hidden']);
                    echo $this->Form->control('img_4', ['type' => 'file']);
                    $this->Form->input('dir_4', ['type' => 'hidden']);
                    echo $this->Form->control('locale', array('label' => 'Locale', 'options' => ['Arabic' => 'Arabic', 'English' => 'English']));
                    echo $this->Form->control('created_at', array('label' => 'Posted date'));
                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Save')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
