<section class="content-header">
    <h1><?= __('Slider Branches') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Slider Branch'), ['action' => 'add']) ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Slider Branches data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>

                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($sliderBranches as $sliderBranch): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($sliderBranch->id) ?></td>-->
                                <td><?= $this->Number->format($sliderBranch->order) ?></td>
                                <td><?= h($sliderBranch->title) ?></td>
                                <td><?= h($sliderBranch->subtitle) ?></td>
                                <td><?= h($sliderBranch->longitude) ?></td>
                                <td><?= h($sliderBranch->latitude) ?></td>
                                <td><?= h($sliderBranch->locale) ?></td>
                                <td><?= h($sliderBranch->photo) ?></td>
                                <!--<td><?= h($sliderBranch->dir) ?></td>-->
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sliderBranch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sliderBranch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sliderBranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderBranch->id)]) ?>
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