<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SocialLink $socialLink
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social Link'), ['action' => 'edit', $socialLink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social Link'), ['action' => 'delete', $socialLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialLink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Social Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Link'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialLinks view large-9 medium-8 columns content">
    <h3><?= h($socialLink->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($socialLink->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($socialLink->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google Plus') ?></th>
            <td><?= h($socialLink->google_plus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instagram') ?></th>
            <td><?= h($socialLink->instagram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Linkedin') ?></th>
            <td><?= h($socialLink->linkedin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialLink->id) ?></td>
        </tr>
    </table>
</div>
