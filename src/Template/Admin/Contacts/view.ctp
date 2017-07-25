<section class="content-header">
  <h1>
    <?php echo __('Contact'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Facebook') ?></dt>
                                        <dd>
                                            <?= h($contact->facebook) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Twitter') ?></dt>
                                        <dd>
                                            <?= h($contact->twitter) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Google Plus') ?></dt>
                                        <dd>
                                            <?= h($contact->google_plus) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Instagram') ?></dt>
                                        <dd>
                                            <?= h($contact->instagram) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Linkedin') ?></dt>
                                        <dd>
                                            <?= h($contact->linkedin) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Address') ?></dt>
                                        <dd>
                                            <?= h($contact->address) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tel1') ?></dt>
                                        <dd>
                                            <?= h($contact->tel1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tel2') ?></dt>
                                        <dd>
                                            <?= h($contact->tel2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Mob') ?></dt>
                                        <dd>
                                            <?= h($contact->mob) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email Contacts') ?></dt>
                                        <dd>
                                            <?= h($contact->email_contacts) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email Consultation') ?></dt>
                                        <dd>
                                            <?= h($contact->email_consultation) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email Career') ?></dt>
                                        <dd>
                                            <?= h($contact->email_career) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Longitude') ?></dt>
                                        <dd>
                                            <?= h($contact->longitude) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Latitude') ?></dt>
                                        <dd>
                                            <?= h($contact->latitude) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Hotline') ?></dt>
                                        <dd>
                                            <?= h($contact->hotline) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($contact->locale) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($contact->name) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Blog') ?></dt>
                                <dd>
                                    <?= $contact->has('blog') ? $contact->blog->title_1 : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                            
                                            
                                                                        <dt><?= __('Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($contact->text)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
