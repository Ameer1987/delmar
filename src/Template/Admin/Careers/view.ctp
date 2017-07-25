<section class="content-header">
  <h1>
    <?php echo __('Career'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($career->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Salary') ?></dt>
                                        <dd>
                                            <?= h($career->salary) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Location') ?></dt>
                                        <dd>
                                            <?= h($career->location) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($career->locale) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Created At') ?></dt>
                                <dd>
                                    <?= h($career->created_at) ?>
                                </dd>
                                                                                                    
                                            
                                                                        <dt><?= __('Description') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($career->description)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
