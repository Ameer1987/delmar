<section class="content-header">
  <h1>
    <?php echo __('Magazine'); ?>
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
                                            <?= h($magazine->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Description') ?></dt>
                                        <dd>
                                            <?= h($magazine->description) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cover Img') ?></dt>
                                        <dd>
                                            <?= h($magazine->cover_img) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cover Dir') ?></dt>
                                        <dd>
                                            <?= h($magazine->cover_dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Pdf') ?></dt>
                                        <dd>
                                            <?= h($magazine->pdf) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Pdf Dir') ?></dt>
                                        <dd>
                                            <?= h($magazine->pdf_dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Folder') ?></dt>
                                        <dd>
                                            <?= h($magazine->folder) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Folder Dir') ?></dt>
                                        <dd>
                                            <?= h($magazine->folder_dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                        <dd>
                                            <?= h($magazine->order) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($magazine->locale) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Created At') ?></dt>
                                <dd>
                                    <?= h($magazine->created_at) ?>
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
