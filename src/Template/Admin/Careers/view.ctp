<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Career $career
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Career'), ['action' => 'edit', $career->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Career'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="careers view large-9 medium-8 columns content">
    <h3><?= h($career->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($career->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= h($career->salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($career->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($career->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($career->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($career->created_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($career->description)); ?>
    </div>
</div>
