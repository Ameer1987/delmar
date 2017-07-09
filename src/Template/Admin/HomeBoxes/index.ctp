<section class="content-header">
    <h1><?= __('Home Boxes') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Home Boxes data') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('avatar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeBoxes as $homeBox): ?>
            <tr>
                <!--<td><?= $this->Number->format($homeBox->id) ?></td>-->
                <td><?= $this->Number->format($homeBox->order) ?></td>
                <td><?= h($homeBox->title) ?></td>
                <td><?= h($homeBox->photo) ?></td>
                <!--<td><?= h($homeBox->dir) ?></td>-->
                <td><?= h($homeBox->avatar) ?></td>
                <td><?= h($homeBox->locale) ?></td>
                <td><?= $homeBox->has('blog') ? $this->Html->link($homeBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $homeBox->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeBox->id)]) ?>
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