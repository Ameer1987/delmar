<section class="content-header">
    <h1><?= __('Contacts') ?></h1>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
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
                    <h3 class="box-title"><?= __('Contacts data') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('google_plus') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('instagram') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('linkedin') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('tel1') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('tel2') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('mob') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('hotline') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
            <?php foreach ($contacts as $contact): ?>
                            <tr>
                                <td><?= h($contact->facebook) ?></td>
                                <td><?= h($contact->twitter) ?></td>
                                <td><?= h($contact->google_plus) ?></td>
                                <td><?= h($contact->instagram) ?></td>
                                <td><?= h($contact->linkedin) ?></td>
                                <td><?= h($contact->address) ?></td>
                                <td><?= h($contact->tel1) ?></td>
                                <td><?= h($contact->tel2) ?></td>
                                <td><?= h($contact->mob) ?></td>
                                <td><?= h($contact->email) ?></td>
                                <td><?= h($contact->longitude) ?></td>
                                <td><?= h($contact->latitude) ?></td>
                                <td><?= h($contact->hotline) ?></td>
                                <td><?= h($contact->locale) ?></td>
                                <td><?= h($contact->name) ?></td>
                                <td><?= $contact->has('blog') ? $this->Html->link($contact->blog->title, ['controller' => 'Blogs', 'action' => 'view', $contact->blog->id]) : '' ?></td>
                                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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