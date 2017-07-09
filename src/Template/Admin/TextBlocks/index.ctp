<section class="content-header">
    <h1><?= __('Text Blocks') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Text Block'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Text Blocks data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($textBlocks as $textBlock): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($textBlock->id) ?></td>-->
                                <td><?= $this->Number->format($textBlock->order) ?></td>
                                <td><?= h($textBlock->title) ?></td>
                                <td><?= h($textBlock->photo) ?></td>
                                <!--<td><?= h($textBlock->dir) ?></td>-->
                                <td><?= h($textBlock->locale) ?></td>
                                <td><?= $textBlock->has('blog') ? $this->Html->link($textBlock->blog->title, ['controller' => 'Blogs', 'action' => 'view', $textBlock->blog->id]) : '' ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $textBlock->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $textBlock->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $textBlock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textBlock->id)]) ?>
                                </td>
                            </tr>
            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<?php
$this->Html->css([
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBotton'); ?>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<?php $this->end(); ?>