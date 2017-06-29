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
                ['action' => 'delete', $responsiveImageBox->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsiveImageBox->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Responsive Image Boxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsiveImageBoxes form large-9 medium-8 columns content">
    <?= $this->Form->create($responsiveImageBox, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit Responsive Image Box') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Form->control('subtitle');
            echo $this->Form->control('locale');
            echo $this->Form->control('link');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>