<section class="content-header">
  <h1>
    Contact
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($contact, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('facebook');
            echo $this->Form->input('twitter');
            echo $this->Form->input('google_plus');
            echo $this->Form->input('instagram');
            echo $this->Form->input('linkedin');
            echo $this->Form->input('address_en');
            echo $this->Form->input('address_ar');
            echo $this->Form->input('tel1');
            echo $this->Form->input('tel2');
            echo $this->Form->input('mob');
            echo $this->Form->input('email_contacts');
            echo $this->Form->input('email_consultation');
            echo $this->Form->input('email_career');
            echo $this->Form->input('hotline_en');
            echo $this->Form->input('hotline_ar');
            echo $this->Ck->input('text');
            echo $this->Form->control('name');
            echo $this->Form->control('blog_id', array('options' => $blogs,'empty' => " "));

          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
