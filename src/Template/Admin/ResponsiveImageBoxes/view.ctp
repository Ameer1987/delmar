<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ResponsiveImageBox $responsiveImageBox
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsive Image Box'), ['action' => 'edit', $responsiveImageBox->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsive Image Box'), ['action' => 'delete', $responsiveImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsiveImageBox->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsive Image Boxes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsive Image Box'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsiveImageBoxes view large-9 medium-8 columns content">
    <h3><?= h($responsiveImageBox->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($responsiveImageBox->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($responsiveImageBox->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($responsiveImageBox->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($responsiveImageBox->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($responsiveImageBox->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $responsiveImageBox->has('blog') ? $this->Html->link($responsiveImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $responsiveImageBox->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsiveImageBox->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($responsiveImageBox->order) ?></td>
        </tr>
    </table>
</div>
