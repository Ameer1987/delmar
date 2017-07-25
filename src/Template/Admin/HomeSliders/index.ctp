<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Home Sliders
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Home Sliders</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('order') ?></th>
              <th><?= $this->Paginator->sort('layer1') ?></th>
              <th><?= $this->Paginator->sort('layer2') ?></th>
              <th><?= $this->Paginator->sort('layer3') ?></th>
              <th><?= $this->Paginator->sort('layer4') ?></th>
              <th><?= $this->Paginator->sort('locale') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($homeSliders as $homeSlider): ?>
              <tr>
                <td><?= $this->Number->format($homeSlider->id) ?></td>
                <td><?= $this->Number->format($homeSlider->order) ?></td>
                <td><?= h($homeSlider->layer1) ?></td>
                <td><?= h($homeSlider->layer2) ?></td>
                <td><?= h($homeSlider->layer3) ?></td>
                <td><?= h($homeSlider->layer4) ?></td>
                <td><?= h($homeSlider->locale) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $homeSlider->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeSlider->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeSlider->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
