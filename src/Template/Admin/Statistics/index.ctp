<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Statistics
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Statistics</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('order') ?></th>
              <th><?= $this->Paginator->sort('number_1') ?></th>
              <th><?= $this->Paginator->sort('number_2') ?></th>
              <th><?= $this->Paginator->sort('number_3') ?></th>
              <th><?= $this->Paginator->sort('number_4') ?></th>
              <th><?= $this->Paginator->sort('title_1') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statistics as $statistic): ?>
              <tr>
                <td><?= $this->Number->format($statistic->id) ?></td>
                <td><?= $this->Number->format($statistic->order) ?></td>
                <td><?= h($statistic->number_1) ?></td>
                <td><?= h($statistic->number_2) ?></td>
                <td><?= h($statistic->number_3) ?></td>
                <td><?= h($statistic->number_4) ?></td>
                <td><?= h($statistic->title_1) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $statistic->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistic->id], ['class'=>'btn btn-warning btn-xs']) ?>
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
