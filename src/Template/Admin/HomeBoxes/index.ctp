<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Home Boxes
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Home Boxes</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('order') ?></th>
              <th><?= $this->Paginator->sort('title') ?></th>
              <th><?= $this->Paginator->sort('photo') ?></th>
              <th><?= $this->Paginator->sort('dir') ?></th>
              <th><?= $this->Paginator->sort('avatar') ?></th>
              <th><?= $this->Paginator->sort('locale') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($homeBoxes as $homeBox): ?>
              <tr>
                <td><?= $this->Number->format($homeBox->id) ?></td>
                <td><?= $this->Number->format($homeBox->order) ?></td>
                <td><?= h($homeBox->title) ?></td>
                <td><?= h($homeBox->photo) ?></td>
                <td><?= h($homeBox->dir) ?></td>
                <td><?= h($homeBox->avatar) ?></td>
                <td><?= h($homeBox->locale) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $homeBox->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeBox->id], ['class'=>'btn btn-warning btn-xs']) ?>
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
