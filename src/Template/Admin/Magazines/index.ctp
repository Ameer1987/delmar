<section class="content-header">
    <h1><?= __('Magazines') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Magazines data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
<!--                                <th scope="col"><?= $this->Paginator->sort('cover_img') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('cover_dir') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('pdf') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('pdf_dir') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('folder') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('folder_dir') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($magazines as $magazine): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($magazine->id) ?></td>-->
                                <td><?= h($magazine->title) ?></td>
                                <td><?= h($magazine->description) ?></td>
<!--                                <td><?= h($magazine->cover_img) ?></td>
                                <td><?= h($magazine->cover_dir) ?></td>
                                <td><?= h($magazine->pdf) ?></td>
                                <td><?= h($magazine->pdf_dir) ?></td>
                                <td><?= h($magazine->folder) ?></td>
                                <td><?= h($magazine->folder_dir) ?></td>-->
                                <td><?= h($magazine->order) ?></td>
                                <td><?= h($magazine->created_at) ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $magazine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $magazine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?>
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