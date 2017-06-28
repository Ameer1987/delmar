<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HomeSlider $homeSlider
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Slider'), ['action' => 'edit', $homeSlider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Slider'), ['action' => 'delete', $homeSlider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeSlider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Slider'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeSliders view large-9 medium-8 columns content">
    <h3><?= h($homeSlider->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Layer1') ?></th>
            <td><?= h($homeSlider->layer1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Layer2') ?></th>
            <td><?= h($homeSlider->layer2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Layer3') ?></th>
            <td><?= h($homeSlider->layer3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Layer4') ?></th>
            <td><?= h($homeSlider->layer4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($homeSlider->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($homeSlider->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($homeSlider->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Align') ?></th>
            <td><?= h($homeSlider->align) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Border') ?></th>
            <td><?= h($homeSlider->border) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $homeSlider->has('blog') ? $this->Html->link($homeSlider->blog->title, ['controller' => 'Blogs', 'action' => 'view', $homeSlider->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeSlider->id) ?></td>
        </tr>
    </table>
</div>
