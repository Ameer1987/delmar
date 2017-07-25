<section class="content-header">
  <h1>
    <?php echo __('Responsive Image Box'); ?>
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
                                            <?= h($responsiveImageBox->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($responsiveImageBox->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($responsiveImageBox->dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Subtitle') ?></dt>
                                        <dd>
                                            <?= h($responsiveImageBox->subtitle) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($responsiveImageBox->locale) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Blog') ?></dt>
                                <dd>
                                    <?= $responsiveImageBox->has('blog') ? $responsiveImageBox->blog->title_1 : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($responsiveImageBox->order) ?>
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
