<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SmallImageBox $smallImageBox
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Small Image Box'), ['action' => 'edit', $smallImageBox->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Small Image Box'), ['action' => 'delete', $smallImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smallImageBox->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Small Image Boxes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Small Image Box'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="smallImageBoxes view large-9 medium-8 columns content">
    <h3><?= h($smallImageBox->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($smallImageBox->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($smallImageBox->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($smallImageBox->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($smallImageBox->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($smallImageBox->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $smallImageBox->has('blog') ? $this->Html->link($smallImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $smallImageBox->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($smallImageBox->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($smallImageBox->text)); ?>
    </div>
</div>
