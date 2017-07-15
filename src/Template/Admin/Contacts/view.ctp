<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact $contact
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <!--<li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>-->
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <!--<li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>-->
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($contact->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($contact->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google Plus') ?></th>
            <td><?= h($contact->google_plus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instagram') ?></th>
            <td><?= h($contact->instagram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Linkedin') ?></th>
            <td><?= h($contact->linkedin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($contact->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel1') ?></th>
            <td><?= h($contact->tel1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel2') ?></th>
            <td><?= h($contact->tel2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mob') ?></th>
            <td><?= h($contact->mob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email contacts') ?></th>
            <td><?= h($contact->email_contacts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email consultation') ?></th>
            <td><?= h($contact->email_consultation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email career') ?></th>
            <td><?= h($contact->email_career) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($contact->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($contact->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotline') ?></th>
            <td><?= h($contact->hotline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($contact->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blog') ?></th>
            <td><?= $contact->has('blog') ? $this->Html->link($contact->blog->title, ['controller' => 'Blogs', 'action' => 'view', $contact->blog->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->text)); ?>
    </div>
</div>
