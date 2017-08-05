<section class="content-header">
  <h1>
    <?php echo __('Branch'); ?>
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
                                            <?= h($sliderBranch->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Subtitle') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->subtitle) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Longitude') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->longitude) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Latitude') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->latitude) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Google Map Title') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->google_map_title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($sliderBranch->dir) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($sliderBranch->order) ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                        <dt><?= __('Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($sliderBranch->text)); ?>
                            </dd>
                                                    <dt><?= __('Google Map Desc') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($sliderBranch->google_map_desc)); ?>
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
