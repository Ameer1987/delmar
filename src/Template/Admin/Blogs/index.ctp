<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Blogs
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Blogs</h3>
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
              <th><?= $this->Paginator->sort('title_1') ?></th>
              <th><?= $this->Paginator->sort('title_2') ?></th>
              <th><?= $this->Paginator->sort('title_3') ?></th>
              <th><?= $this->Paginator->sort('main_img') ?></th>
              <th><?= $this->Paginator->sort('main_dir') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blogs as $blog): ?>
              <tr>
                <td><?= $this->Number->format($blog->id) ?></td>
                <td><?= $this->Number->format($blog->order) ?></td>
                <td><?= h($blog->title_1) ?></td>
                <td><?= h($blog->title_2) ?></td>
                <td><?= h($blog->title_3) ?></td>
                <td><?= h($blog->main_img) ?></td>
                <td><?= h($blog->main_dir) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $blog->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blog->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blog->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
