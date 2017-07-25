<section class="content-header">
  <h1>
    <?php echo __('Blog'); ?>
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
                                                                                                                <dt><?= __('Title 1') ?></dt>
                                        <dd>
                                            <?= h($blog->title_1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 2') ?></dt>
                                        <dd>
                                            <?= h($blog->title_2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title 3') ?></dt>
                                        <dd>
                                            <?= h($blog->title_3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Main Img') ?></dt>
                                        <dd>
                                            <?= h($blog->main_img) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Main Dir') ?></dt>
                                        <dd>
                                            <?= h($blog->main_dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Img 1') ?></dt>
                                        <dd>
                                            <?= h($blog->img_1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir 1') ?></dt>
                                        <dd>
                                            <?= h($blog->dir_1) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Img 2') ?></dt>
                                        <dd>
                                            <?= h($blog->img_2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir 2') ?></dt>
                                        <dd>
                                            <?= h($blog->dir_2) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Img 3') ?></dt>
                                        <dd>
                                            <?= h($blog->img_3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir 3') ?></dt>
                                        <dd>
                                            <?= h($blog->dir_3) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Img 4') ?></dt>
                                        <dd>
                                            <?= h($blog->img_4) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dir 4') ?></dt>
                                        <dd>
                                            <?= h($blog->dir_4) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Locale') ?></dt>
                                        <dd>
                                            <?= h($blog->locale) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Order') ?></dt>
                                <dd>
                                    <?= $this->Number->format($blog->order) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Created At') ?></dt>
                                <dd>
                                    <?= h($blog->created_at) ?>
                                </dd>
                                                                                                    
                                            
                                                                        <dt><?= __('Desc 1') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($blog->desc_1)); ?>
                            </dd>
                                                    <dt><?= __('Desc 2') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($blog->desc_2)); ?>
                            </dd>
                                                    <dt><?= __('Desc 3') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($blog->desc_3)); ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Block Tabs']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->block_tabs)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Subtitle
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Header Icon
                                    </th>
                                        
                                                                    
                                    <th>
                                    Header Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->block_tabs as $blockTabs): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($blockTabs->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->subtitle) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->header_icon) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->header_title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($blockTabs->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'BlockTabs', 'action' => 'view', $blockTabs->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'BlockTabs', 'action' => 'edit', $blockTabs->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlockTabs', 'action' => 'delete', $blockTabs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockTabs->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Contacts']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->contacts)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Facebook
                                    </th>
                                        
                                                                    
                                    <th>
                                    Twitter
                                    </th>
                                        
                                                                    
                                    <th>
                                    Google Plus
                                    </th>
                                        
                                                                    
                                    <th>
                                    Instagram
                                    </th>
                                        
                                                                    
                                    <th>
                                    Linkedin
                                    </th>
                                        
                                                                    
                                    <th>
                                    Address
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tel1
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tel2
                                    </th>
                                        
                                                                    
                                    <th>
                                    Mob
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email Contacts
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email Consultation
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email Career
                                    </th>
                                        
                                                                    
                                    <th>
                                    Longitude
                                    </th>
                                        
                                                                    
                                    <th>
                                    Latitude
                                    </th>
                                        
                                                                    
                                    <th>
                                    Hotline
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->contacts as $contacts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($contacts->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->facebook) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->twitter) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->google_plus) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->instagram) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->linkedin) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->address) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->tel1) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->tel2) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->mob) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->email_contacts) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->email_consultation) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->email_career) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->longitude) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->latitude) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->hotline) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contacts->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Home Boxes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->home_boxes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Avatar
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->home_boxes as $homeBoxes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->avatar) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeBoxes->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'HomeBoxes', 'action' => 'view', $homeBoxes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeBoxes', 'action' => 'edit', $homeBoxes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeBoxes', 'action' => 'delete', $homeBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeBoxes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Home Sliders']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->home_sliders)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Layer1
                                    </th>
                                        
                                                                    
                                    <th>
                                    Layer2
                                    </th>
                                        
                                                                    
                                    <th>
                                    Layer3
                                    </th>
                                        
                                                                    
                                    <th>
                                    Layer4
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Align
                                    </th>
                                        
                                                                    
                                    <th>
                                    Border
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->home_sliders as $homeSliders): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($homeSliders->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->layer1) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->layer2) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->layer3) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->layer4) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->align) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->border) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($homeSliders->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'HomeSliders', 'action' => 'view', $homeSliders->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeSliders', 'action' => 'edit', $homeSliders->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeSliders', 'action' => 'delete', $homeSliders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeSliders->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Large Image Boxes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->large_image_boxes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->large_image_boxes as $largeImageBoxes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($largeImageBoxes->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'LargeImageBoxes', 'action' => 'view', $largeImageBoxes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'LargeImageBoxes', 'action' => 'edit', $largeImageBoxes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LargeImageBoxes', 'action' => 'delete', $largeImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $largeImageBoxes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Responsive Image Boxes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->responsive_image_boxes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Subtitle
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->responsive_image_boxes as $responsiveImageBoxes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->subtitle) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($responsiveImageBoxes->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'view', $responsiveImageBoxes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'edit', $responsiveImageBoxes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'delete', $responsiveImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsiveImageBoxes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Small Image Boxes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->small_image_boxes)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->small_image_boxes as $smallImageBoxes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($smallImageBoxes->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'SmallImageBoxes', 'action' => 'view', $smallImageBoxes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'SmallImageBoxes', 'action' => 'edit', $smallImageBoxes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SmallImageBoxes', 'action' => 'delete', $smallImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smallImageBoxes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Text Blocks']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($blog->text_blocks)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Order
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Photo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dir
                                    </th>
                                        
                                                                    
                                    <th>
                                    Text
                                    </th>
                                        
                                                                    
                                    <th>
                                    Locale
                                    </th>
                                        
                                                                    
                                    <th>
                                    Blog Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($blog->text_blocks as $textBlocks): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($textBlocks->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->order) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->photo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->dir) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->text) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->locale) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($textBlocks->blog_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'TextBlocks', 'action' => 'view', $textBlocks->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'TextBlocks', 'action' => 'edit', $textBlocks->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TextBlocks', 'action' => 'delete', $textBlocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textBlocks->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
