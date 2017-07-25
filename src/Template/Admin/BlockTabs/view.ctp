<section class="content-header">
  <h1>
    <?php echo __('Block Tab'); ?>
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
                                            <?= h($blockTab->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Subtitle') ?></dt>
                                        <dd>
                                            <?= h($blockTab->subtitle) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($blockTab->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($blockTab->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($blockTab->dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Header Icon') ?></dt>
                                        <dd>
                                            <?= h($blockTab->header_icon) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Header Title') ?></dt>
                                        <dd>
                                            <?= h($blockTab->header_title) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Blog') ?></dt>
                                <dd>
                                    <?= $blockTab->has('blog') ? $blockTab->blog->title_1 : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($blockTab->order) ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                        <dt><?= __('Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($blockTab->text)); ?>
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
