<section class="content-header">
    <h1><?= __('Statistics') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Statistic'), ['action' => 'add']) ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Statistics data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('number_1') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('number_2') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('number_3') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('number_4') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title_1') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title_2') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title_3') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title_4') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($statistics as $statistic): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($statistic->id) ?></td>-->
                                <td><?= $this->Number->format($statistic->order) ?></td>
                                <td><?= h($statistic->number_1) ?></td>
                                <td><?= h($statistic->number_2) ?></td>
                                <td><?= h($statistic->number_3) ?></td>
                                <td><?= h($statistic->number_4) ?></td>
                                <td><?= h($statistic->title_1) ?></td>
                                <td><?= h($statistic->title_2) ?></td>
                                <td><?= h($statistic->title_3) ?></td>
                                <td><?= h($statistic->title_4) ?></td>
                                <td><?= h($statistic->locale) ?></td>
                                <td><?= h($statistic->photo) ?></td>
                                <!--<td><?= h($statistic->dir) ?></td>-->
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statistic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statistic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id)]) ?>
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