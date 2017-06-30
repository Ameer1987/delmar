<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SliderBranch $sliderBranch
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slider Branch'), ['action' => 'edit', $sliderBranch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slider Branch'), ['action' => 'delete', $sliderBranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderBranch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slider Branches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slider Branch'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sliderBranches view large-9 medium-8 columns content">
    <h3><?= h($sliderBranch->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($sliderBranch->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($sliderBranch->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($sliderBranch->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($sliderBranch->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($sliderBranch->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($sliderBranch->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($sliderBranch->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sliderBranch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($sliderBranch->order) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($sliderBranch->text)); ?>
    </div>
</div>
