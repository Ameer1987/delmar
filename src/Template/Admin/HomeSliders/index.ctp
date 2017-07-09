<section class="content-header">
    <h1><?= __('Home Sliders') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Slider'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Home Sliders data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('layer1') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('layer2') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('layer3') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('layer4') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <!--<th scope="col"><?= $this->Paginator->sort('align') ?></th>-->
                                <!--<th scope="col"><?= $this->Paginator->sort('border') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($homeSliders as $homeSlider): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($homeSlider->id) ?></td>-->
                                <td><?= $this->Number->format($homeSlider->order) ?></td>
                                <td><?= h($homeSlider->layer1) ?></td>
                                <td><?= h($homeSlider->layer2) ?></td>
                                <td><?= h($homeSlider->layer3) ?></td>
                                <td><?= h($homeSlider->layer4) ?></td>
                                <td><?= h($homeSlider->locale) ?></td>
                                <td><?= h($homeSlider->photo) ?></td>
                                <!--<td><?= h($homeSlider->dir) ?></td>-->
                                <!--<td><?= h($homeSlider->align) ?></td>-->
                                <!--<td><?= h($homeSlider->border) ?></td>-->
                                <td><?= $homeSlider->has('blog') ? $this->Html->link($homeSlider->blog->title, ['controller' => 'Blogs', 'action' => 'view', $homeSlider->blog->id]) : '' ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeSlider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeSlider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeSlider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeSlider->id)]) ?>
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