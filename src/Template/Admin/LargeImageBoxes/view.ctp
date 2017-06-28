<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\LargeImageBox $largeImageBox
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Large Image Box'), ['action' => 'edit', $largeImageBox->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Large Image Box'), ['action' => 'delete', $largeImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $largeImageBox->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Large Image Boxes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Large Image Box'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="largeImageBoxes view large-9 medium-8 columns content">
    <h3><?= h($largeImageBox->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($largeImageBox->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($largeImageBox->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($largeImageBox->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($largeImageBox->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($largeImageBox->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $largeImageBox->has('blog') ? $this->Html->link($largeImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $largeImageBox->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($largeImageBox->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($largeImageBox->text)); ?>
    </div>
</div>
