<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Contacts
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Contacts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('facebook') ?></th>
              <th><?= $this->Paginator->sort('twitter') ?></th>
              <th><?= $this->Paginator->sort('google_plus') ?></th>
              <th><?= $this->Paginator->sort('instagram') ?></th>
              <th><?= $this->Paginator->sort('linkedin') ?></th>
              <th><?= $this->Paginator->sort('address_en') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contacts as $contact): ?>
              <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->facebook) ?></td>
                <td><?= h($contact->twitter) ?></td>
                <td><?= h($contact->google_plus) ?></td>
                <td><?= h($contact->instagram) ?></td>
                <td><?= h($contact->linkedin) ?></td>
                <td><?= h($contact->address_en) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
