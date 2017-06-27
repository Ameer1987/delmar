<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HomeBox $homeBox
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Box'), ['action' => 'edit', $homeBox->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Box'), ['action' => 'delete', $homeBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeBox->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Boxes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Box'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeBoxes view large-9 medium-8 columns content">
    <h3><?= h($homeBox->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($homeBox->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($homeBox->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($homeBox->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar') ?></th>
            <td><?= h($homeBox->avatar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($homeBox->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeBox->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($homeBox->text)); ?>
    </div>
</div>
