<section class="content-header">
  <h1>
    <?php echo __('Statistic'); ?>
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
                                                                                                                <dt><?= __('Number 1') ?></dt>
                                        <dd>
                                            <?= h($statistic->number_1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Number 2') ?></dt>
                                        <dd>
                                            <?= h($statistic->number_2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Number 3') ?></dt>
                                        <dd>
                                            <?= h($statistic->number_3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Number 4') ?></dt>
                                        <dd>
                                            <?= h($statistic->number_4) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 1') ?></dt>
                                        <dd>
                                            <?= h($statistic->title_1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 2') ?></dt>
                                        <dd>
                                            <?= h($statistic->title_2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 3') ?></dt>
                                        <dd>
                                            <?= h($statistic->title_3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 4') ?></dt>
                                        <dd>
                                            <?= h($statistic->title_4) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($statistic->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($statistic->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir') ?></dt>
                                        <dd>
                                            <?= h($statistic->dir) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($statistic->order) ?>
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
