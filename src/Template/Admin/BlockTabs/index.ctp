<section class="content-header">
    <h1><?= __('Block Tabs') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Block Tab'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3><?= __('Block Tabs data') ?></h3>
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
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('header_icon') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('header_title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($blockTabs as $blockTab): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($blockTab->id) ?></td>-->
                                <td><?= $this->Number->format($blockTab->order) ?></td>
                                <td><?= h($blockTab->title) ?></td>
                                <td><?= h($blockTab->subtitle) ?></td>
                                <td><?= h($blockTab->locale) ?></td>
                                <td><?= h($blockTab->photo) ?></td>
                                <!--<td><?= h($blockTab->dir) ?></td>-->
                                <td><?= h($blockTab->header_icon) ?></td>
                                <td><?= h($blockTab->header_title) ?></td>
                                <td><?= $blockTab->has('blog') ? $this->Html->link($blockTab->blog->title, ['controller' => 'Blogs', 'action' => 'view', $blockTab->blog->id]) : '' ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blockTab->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blockTab->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blockTab->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockTab->id)]) ?>
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