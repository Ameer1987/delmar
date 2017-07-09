<section class="content-header">
    <h1><?= __('Users') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Users data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('username') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('password') ?></th>-->
                                <!--<th scope="col"><?= $this->Paginator->sort('role') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                                <!--<th scope="col"><?= $this->Paginator->sort('created') ?></th>-->
                                <!--<th scope="col"><?= $this->Paginator->sort('modified') ?></th>-->
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($users as $user): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($user->id) ?></td>-->
                                <!--<td><?= h($user->name) ?></td>-->
                                <td><?= $this->Html->link(__($user->username), ['action' => 'view', $user->id])?></td>
                                <td><?= h($user->email) ?></td>
                                <!--<td><?= h($user->password) ?></td>-->
                                <!--<td><?= h($user->role) ?></td>-->
                                <td><?= h($user->photo) ?></td>
                                <!--<td><?= h($user->dir) ?></td>-->
                                <!--<td><?= h($user->created) ?></td>-->
                                <!--<td><?= h($user->modified) ?></td>-->
                                <td class="actions">
                                    <div class="btn btn-circled">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                    </div>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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