<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Statistic $statistic
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Statistic'), ['action' => 'edit', $statistic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statistic'), ['action' => 'delete', $statistic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statistics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statistic'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statistics view large-9 medium-8 columns content">
    <h3><?= h($statistic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number 1') ?></th>
            <td><?= h($statistic->number_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number 2') ?></th>
            <td><?= h($statistic->number_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number 3') ?></th>
            <td><?= h($statistic->number_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number 4') ?></th>
            <td><?= h($statistic->number_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 1') ?></th>
            <td><?= h($statistic->title_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 2') ?></th>
            <td><?= h($statistic->title_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 3') ?></th>
            <td><?= h($statistic->title_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title 4') ?></th>
            <td><?= h($statistic->title_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($statistic->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($statistic->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statistic->id) ?></td>
        </tr>
    </table>
</div>
