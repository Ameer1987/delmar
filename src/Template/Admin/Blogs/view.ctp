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
        <li><?= $this->Html->link(__('List Social Links'), ['controller' => 'SocialLinks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Link'), ['controller' => 'SocialLinks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blogs view large-9 medium-8 columns content">
    <h3><?= h($blog->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($blog->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($blog->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($blog->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blog->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($blog->text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Boxes') ?></h4>
        <?php if (!empty($blog->home_boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Avatar') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->home_boxes as $homeBoxes): ?>
            <tr>
                <td><?= h($homeBoxes->id) ?></td>
                <td><?= h($homeBoxes->title) ?></td>
                <td><?= h($homeBoxes->image) ?></td>
                <td><?= h($homeBoxes->link) ?></td>
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
                <th scope="col"><?= __('Layer1') ?></th>
                <th scope="col"><?= __('Layer2') ?></th>
                <th scope="col"><?= __('Layer3') ?></th>
                <th scope="col"><?= __('Layer4') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Align') ?></th>
                <th scope="col"><?= __('Border') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->home_sliders as $homeSliders): ?>
            <tr>
                <td><?= h($homeSliders->id) ?></td>
                <td><?= h($homeSliders->layer1) ?></td>
                <td><?= h($homeSliders->layer2) ?></td>
                <td><?= h($homeSliders->layer3) ?></td>
                <td><?= h($homeSliders->layer4) ?></td>
                <td><?= h($homeSliders->locale) ?></td>
                <td><?= h($homeSliders->image) ?></td>
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
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->large_image_boxes as $largeImageBoxes): ?>
            <tr>
                <td><?= h($largeImageBoxes->id) ?></td>
                <td><?= h($largeImageBoxes->title) ?></td>
                <td><?= h($largeImageBoxes->text) ?></td>
                <td><?= h($largeImageBoxes->locale) ?></td>
                <td><?= h($largeImageBoxes->image) ?></td>
                <td><?= h($largeImageBoxes->link) ?></td>
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
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->responsive_image_boxes as $responsiveImageBoxes): ?>
            <tr>
                <td><?= h($responsiveImageBoxes->id) ?></td>
                <td><?= h($responsiveImageBoxes->title) ?></td>
                <td><?= h($responsiveImageBoxes->subtitle) ?></td>
                <td><?= h($responsiveImageBoxes->locale) ?></td>
                <td><?= h($responsiveImageBoxes->image) ?></td>
                <td><?= h($responsiveImageBoxes->link) ?></td>
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
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->small_image_boxes as $smallImageBoxes): ?>
            <tr>
                <td><?= h($smallImageBoxes->id) ?></td>
                <td><?= h($smallImageBoxes->title) ?></td>
                <td><?= h($smallImageBoxes->text) ?></td>
                <td><?= h($smallImageBoxes->locale) ?></td>
                <td><?= h($smallImageBoxes->image) ?></td>
                <td><?= h($smallImageBoxes->link) ?></td>
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
        <h4><?= __('Related Social Links') ?></h4>
        <?php if (!empty($blog->social_links)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Twitter') ?></th>
                <th scope="col"><?= __('Google Plus') ?></th>
                <th scope="col"><?= __('Instagram') ?></th>
                <th scope="col"><?= __('Linkedin') ?></th>
                <th scope="col"><?= __('Blog Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blog->social_links as $socialLinks): ?>
            <tr>
                <td><?= h($socialLinks->id) ?></td>
                <td><?= h($socialLinks->facebook) ?></td>
                <td><?= h($socialLinks->twitter) ?></td>
                <td><?= h($socialLinks->google_plus) ?></td>
                <td><?= h($socialLinks->instagram) ?></td>
                <td><?= h($socialLinks->linkedin) ?></td>
                <td><?= h($socialLinks->blog_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SocialLinks', 'action' => 'view', $socialLinks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SocialLinks', 'action' => 'edit', $socialLinks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SocialLinks', 'action' => 'delete', $socialLinks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialLinks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
