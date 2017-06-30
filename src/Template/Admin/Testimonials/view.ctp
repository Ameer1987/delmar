<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Testimonial $testimonial
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testimonial'), ['action' => 'edit', $testimonial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testimonial'), ['action' => 'delete', $testimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testimonial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testimonials view large-9 medium-8 columns content">
    <h3><?= h($testimonial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Author Name') ?></th>
            <td><?= h($testimonial->author_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($testimonial->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($testimonial->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($testimonial->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testimonial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($testimonial->order) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($testimonial->text)); ?>
    </div>
</div>
