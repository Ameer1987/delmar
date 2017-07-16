<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Blog $blog
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blog'), ['action' => 'edit', $blog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blog'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Block Tabs'), ['controller' => 'BlockTabs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block Tab'), ['controller' => 'BlockTabs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Boxes'), ['controller' => 'HomeBoxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Box'), ['controller' => 'HomeBoxes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['controller' => 'HomeSliders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Slider'), ['controller' => 'HomeSliders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Large Image Boxes'), ['controller' => 'LargeImageBoxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Large Image Box'), ['controller' => 'LargeImageBoxes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsive Image Boxes'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsive Image Box'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Small Image Boxes'), ['controller' => 'SmallImageBoxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Small Image Box'), ['controller' => 'SmallImageBoxes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Text Blocks'), ['controller' => 'TextBlocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Text Block'), ['controller' => 'TextBlocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blogs view large-9 medium-8 columns content">
    <h3><?= h($blog->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title 1') ?></th>
            <td><?= h($blog->title_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 2') ?></th>
            <td><?= h($blog->title_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 3') ?></th>
            <td><?= h($blog->title_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Img') ?></th>
            <td><?= h($blog->main_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Dir') ?></th>
            <td><?= h($blog->main_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img 1') ?></th>
            <td><?= h($blog->img_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir 1') ?></th>
            <td><?= h($blog->dir_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img 2') ?></th>
            <td><?= h($blog->img_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir 2') ?></th>
            <td><?= h($blog->dir_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img 3') ?></th>
            <td><?= h($blog->img_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir 3') ?></th>
            <td><?= h($blog->dir_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img 4') ?></th>
            <td><?= h($blog->img_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir 4') ?></th>
            <td><?= h($blog->dir_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($blog->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($blog->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($blog->created_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Desc 1') ?></h4>
        <?= $this->Text->autoParagraph(h($blog->desc_1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desc 2') ?></h4>
        <?= $this->Text->autoParagraph(h($blog->desc_2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desc 3') ?></h4>
        <?= $this->Text->autoParagraph(h($blog->desc_3)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Block Tabs') ?></h4>
        <?php if (!empty($blog->block_tabs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Header Icon') ?></th>
                <th scope="col"><?= __('Header Title') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->block_tabs as $blockTabs): ?>
            <tr>
                <td><?= h($blockTabs->id) ?></td>
                <td><?= h($blockTabs->order) ?></td>
                <td><?= h($blockTabs->title) ?></td>
                <td><?= h($blockTabs->subtitle) ?></td>
                <td><?= h($blockTabs->text) ?></td>
                <td><?= h($blockTabs->locale) ?></td>
                <td><?= h($blockTabs->photo) ?></td>
                <td><?= h($blockTabs->dir) ?></td>
                <td><?= h($blockTabs->header_icon) ?></td>
                <td><?= h($blockTabs->header_title) ?></td>
                <td><?= h($blockTabs->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BlockTabs', 'action' => 'view', $blockTabs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BlockTabs', 'action' => 'edit', $blockTabs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlockTabs', 'action' => 'delete', $blockTabs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockTabs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($blog->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Twitter') ?></th>
                <th scope="col"><?= __('Google Plus') ?></th>
                <th scope="col"><?= __('Instagram') ?></th>
                <th scope="col"><?= __('Linkedin') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Tel1') ?></th>
                <th scope="col"><?= __('Tel2') ?></th>
                <th scope="col"><?= __('Mob') ?></th>
                <th scope="col"><?= __('Email Contacts') ?></th>
                <th scope="col"><?= __('Email Consultation') ?></th>
                <th scope="col"><?= __('Email Career') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Hotline') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->facebook) ?></td>
                <td><?= h($contacts->twitter) ?></td>
                <td><?= h($contacts->google_plus) ?></td>
                <td><?= h($contacts->instagram) ?></td>
                <td><?= h($contacts->linkedin) ?></td>
                <td><?= h($contacts->address) ?></td>
                <td><?= h($contacts->tel1) ?></td>
                <td><?= h($contacts->tel2) ?></td>
                <td><?= h($contacts->mob) ?></td>
                <td><?= h($contacts->email_contacts) ?></td>
                <td><?= h($contacts->email_consultation) ?></td>
                <td><?= h($contacts->email_career) ?></td>
                <td><?= h($contacts->longitude) ?></td>
                <td><?= h($contacts->latitude) ?></td>
                <td><?= h($contacts->hotline) ?></td>
                <td><?= h($contacts->locale) ?></td>
                <td><?= h($contacts->text) ?></td>
                <td><?= h($contacts->name) ?></td>
                <td><?= h($contacts->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Boxes') ?></h4>
        <?php if (!empty($blog->home_boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Avatar') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->home_boxes as $homeBoxes): ?>
            <tr>
                <td><?= h($homeBoxes->id) ?></td>
                <td><?= h($homeBoxes->order) ?></td>
                <td><?= h($homeBoxes->title) ?></td>
                <td><?= h($homeBoxes->photo) ?></td>
                <td><?= h($homeBoxes->dir) ?></td>
                <td><?= h($homeBoxes->avatar) ?></td>
                <td><?= h($homeBoxes->text) ?></td>
                <td><?= h($homeBoxes->locale) ?></td>
                <td><?= h($homeBoxes->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeBoxes', 'action' => 'view', $homeBoxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeBoxes', 'action' => 'edit', $homeBoxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeBoxes', 'action' => 'delete', $homeBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeBoxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Sliders') ?></h4>
        <?php if (!empty($blog->home_sliders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Layer1') ?></th>
                <th scope="col"><?= __('Layer2') ?></th>
                <th scope="col"><?= __('Layer3') ?></th>
                <th scope="col"><?= __('Layer4') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Align') ?></th>
                <th scope="col"><?= __('Border') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->home_sliders as $homeSliders): ?>
            <tr>
                <td><?= h($homeSliders->id) ?></td>
                <td><?= h($homeSliders->order) ?></td>
                <td><?= h($homeSliders->layer1) ?></td>
                <td><?= h($homeSliders->layer2) ?></td>
                <td><?= h($homeSliders->layer3) ?></td>
                <td><?= h($homeSliders->layer4) ?></td>
                <td><?= h($homeSliders->locale) ?></td>
                <td><?= h($homeSliders->photo) ?></td>
                <td><?= h($homeSliders->dir) ?></td>
                <td><?= h($homeSliders->align) ?></td>
                <td><?= h($homeSliders->border) ?></td>
                <td><?= h($homeSliders->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeSliders', 'action' => 'view', $homeSliders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeSliders', 'action' => 'edit', $homeSliders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeSliders', 'action' => 'delete', $homeSliders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeSliders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Large Image Boxes') ?></h4>
        <?php if (!empty($blog->large_image_boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->large_image_boxes as $largeImageBoxes): ?>
            <tr>
                <td><?= h($largeImageBoxes->id) ?></td>
                <td><?= h($largeImageBoxes->order) ?></td>
                <td><?= h($largeImageBoxes->title) ?></td>
                <td><?= h($largeImageBoxes->photo) ?></td>
                <td><?= h($largeImageBoxes->dir) ?></td>
                <td><?= h($largeImageBoxes->text) ?></td>
                <td><?= h($largeImageBoxes->locale) ?></td>
                <td><?= h($largeImageBoxes->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LargeImageBoxes', 'action' => 'view', $largeImageBoxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LargeImageBoxes', 'action' => 'edit', $largeImageBoxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LargeImageBoxes', 'action' => 'delete', $largeImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $largeImageBoxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Responsive Image Boxes') ?></h4>
        <?php if (!empty($blog->responsive_image_boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->responsive_image_boxes as $responsiveImageBoxes): ?>
            <tr>
                <td><?= h($responsiveImageBoxes->id) ?></td>
                <td><?= h($responsiveImageBoxes->order) ?></td>
                <td><?= h($responsiveImageBoxes->title) ?></td>
                <td><?= h($responsiveImageBoxes->photo) ?></td>
                <td><?= h($responsiveImageBoxes->dir) ?></td>
                <td><?= h($responsiveImageBoxes->subtitle) ?></td>
                <td><?= h($responsiveImageBoxes->locale) ?></td>
                <td><?= h($responsiveImageBoxes->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'view', $responsiveImageBoxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'edit', $responsiveImageBoxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'delete', $responsiveImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsiveImageBoxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Small Image Boxes') ?></h4>
        <?php if (!empty($blog->small_image_boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->small_image_boxes as $smallImageBoxes): ?>
            <tr>
                <td><?= h($smallImageBoxes->id) ?></td>
                <td><?= h($smallImageBoxes->order) ?></td>
                <td><?= h($smallImageBoxes->title) ?></td>
                <td><?= h($smallImageBoxes->photo) ?></td>
                <td><?= h($smallImageBoxes->dir) ?></td>
                <td><?= h($smallImageBoxes->text) ?></td>
                <td><?= h($smallImageBoxes->locale) ?></td>
                <td><?= h($smallImageBoxes->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SmallImageBoxes', 'action' => 'view', $smallImageBoxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SmallImageBoxes', 'action' => 'edit', $smallImageBoxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SmallImageBoxes', 'action' => 'delete', $smallImageBoxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smallImageBoxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Text Blocks') ?></h4>
        <?php if (!empty($blog->text_blocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->text_blocks as $textBlocks): ?>
            <tr>
                <td><?= h($textBlocks->id) ?></td>
                <td><?= h($textBlocks->order) ?></td>
                <td><?= h($textBlocks->title) ?></td>
                <td><?= h($textBlocks->photo) ?></td>
                <td><?= h($textBlocks->dir) ?></td>
                <td><?= h($textBlocks->text) ?></td>
                <td><?= h($textBlocks->locale) ?></td>
                <td><?= h($textBlocks->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TextBlocks', 'action' => 'view', $textBlocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TextBlocks', 'action' => 'edit', $textBlocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TextBlocks', 'action' => 'delete', $textBlocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textBlocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
