<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('google_plus');
            echo $this->Form->control('instagram');
            echo $this->Form->control('linkedin');
            echo $this->Form->control('address');
            echo $this->Form->control('tel1');
            echo $this->Form->control('tel2');
            echo $this->Form->control('mob');
            echo $this->Form->control('email');
            echo $this->Form->control('longitude');
            echo $this->Form->control('latitude');
            echo $this->Form->control('hotline');
            echo $this->Form->control('locale');
            echo $this->Form->control('text');
            echo $this->Form->control('name');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
