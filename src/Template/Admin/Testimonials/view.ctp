<section class="content-header">
  <h1>
    <?php echo __('Testimonial'); ?>
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
                                                                                                                <dt><?= __('Author Name') ?></dt>
                                        <dd>
                                            <?= h($testimonial->author_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($testimonial->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($testimonial->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($testimonial->dir) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($testimonial->order) ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                        <dt><?= __('Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($testimonial->text)); ?>
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
