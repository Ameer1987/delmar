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
                ['action' => 'delete', $homeBox->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeBox->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Home Boxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeBoxes form large-9 medium-8 columns content">
    <?= $this->Form->create($homeBox) ?>
    <fieldset>
        <legend><?= __('Edit Home Box') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('image');
            echo $this->Form->control('link');
            echo $this->Form->control('avatar');
            echo $this->Form->control('text');
            echo $this->Form->control('locale');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
