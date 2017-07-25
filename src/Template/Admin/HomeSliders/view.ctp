<section class="content-header">
  <h1>
    <?php echo __('Home Slider'); ?>
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
                                                                                                                <dt><?= __('Layer1') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->layer1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Layer2') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->layer2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Layer3') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->layer3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Layer4') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->layer4) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Align') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->align) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Border') ?></dt>
                                        <dd>
                                            <?= h($homeSlider->border) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Blog') ?></dt>
                                <dd>
                                    <?= $homeSlider->has('blog') ? $homeSlider->blog->title_1 : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($homeSlider->order) ?>
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
