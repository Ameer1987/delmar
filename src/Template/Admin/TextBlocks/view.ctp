<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TextBlock $textBlock
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Text Block'), ['action' => 'edit', $textBlock->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Text Block'), ['action' => 'delete', $textBlock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textBlock->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Text Blocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Text Block'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="textBlocks view large-9 medium-8 columns content">
    <h3><?= h($textBlock->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($textBlock->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($textBlock->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($textBlock->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($textBlock->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $textBlock->has('blog') ? $this->Html->link($textBlock->blog->title, ['controller' => 'Blogs', 'action' => 'view', $textBlock->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($textBlock->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($textBlock->order) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($textBlock->text)); ?>
    </div>
</div>
