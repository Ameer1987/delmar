<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BlockTab $blockTab
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Block Tab'), ['action' => 'edit', $blockTab->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block Tab'), ['action' => 'delete', $blockTab->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockTab->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Block Tabs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block Tab'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blockTabs view large-9 medium-8 columns content">
    <h3><?= h($blockTab->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($blockTab->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($blockTab->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($blockTab->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($blockTab->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($blockTab->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Header Icon') ?></th>
            <td><?= h($blockTab->header_icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Header Title') ?></th>
            <td><?= h($blockTab->header_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $blockTab->has('blog') ? $this->Html->link($blockTab->blog->title, ['controller' => 'Blogs', 'action' => 'view', $blockTab->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blockTab->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($blockTab->order) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($blockTab->text)); ?>
    </div>
</div>
