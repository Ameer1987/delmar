<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Magazine $magazine
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Magazine'), ['action' => 'edit', $magazine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Magazine'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="magazines view large-9 medium-8 columns content">
    <h3><?= h($magazine->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($magazine->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($magazine->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cover Img') ?></th>
            <td><?= h($magazine->cover_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cover Dir') ?></th>
            <td><?= h($magazine->cover_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pdf') ?></th>
            <td><?= h($magazine->pdf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pdf Dir') ?></th>
            <td><?= h($magazine->pdf_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Folder') ?></th>
            <td><?= h($magazine->folder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Folder Dir') ?></th>
            <td><?= h($magazine->folder_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($magazine->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= h($magazine->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($magazine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($magazine->created_at) ?></td>
        </tr>
    </table>
</div>
