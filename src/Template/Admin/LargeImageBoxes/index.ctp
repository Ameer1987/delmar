<section class="content-header">
    <h1><?= __('Large Image Boxes') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Large Image Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Large Image Boxes data') ?></h3>
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
            <?php foreach ($largeImageBoxes as $largeImageBox): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($largeImageBox->id) ?></td>-->
                                <td><?= $this->Number->format($largeImageBox->order) ?></td>
                                <td><?= h($largeImageBox->title) ?></td>
                                <td><?= h($largeImageBox->photo) ?></td>
                                <!--<td><?= h($largeImageBox->dir) ?></td>-->
                                <td><?= h($largeImageBox->locale) ?></td>
                                <td><?= $largeImageBox->has('blog') ? $this->Html->link($largeImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $largeImageBox->blog->id]) : '' ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $largeImageBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $largeImageBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $largeImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $largeImageBox->id)]) ?>
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