<?php

/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Career[]|\Cake\Collection\CollectionInterface $careers
  */
?>
<section class="content-header">
    <h1><?= __('Careers') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Career'), ['action' => 'add']) ?></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Careers data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('salary') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($careers as $career): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($career->id) ?></td>-->
                                <td><?= h($career->title) ?></td>
                                <td><?= h($career->salary) ?></td>
                                <!--<td><?= h($career->longitude) ?></td>-->
                                <!--<td><?= h($career->latitude) ?></td>-->
                                <td><?= h($career->created_at) ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $career->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $career->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?>
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