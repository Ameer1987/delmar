<section class="content-header">
  <h1>
    <?php echo __('Large Image Box'); ?>
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
                                            <?= h($largeImageBox->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($largeImageBox->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($largeImageBox->dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($largeImageBox->locale) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Blog') ?></dt>
                                <dd>
                                    <?= $largeImageBox->has('blog') ? $largeImageBox->blog->title_1 : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($largeImageBox->order) ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                        <dt><?= __('Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($largeImageBox->text)); ?>
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
