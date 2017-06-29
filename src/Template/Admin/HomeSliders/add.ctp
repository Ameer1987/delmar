<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeSliders form large-9 medium-8 columns content">
    <?= $this->Form->create($homeSlider, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add Home Slider') ?></legend>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('layer1');
            echo $this->Form->control('layer2');
            echo $this->Form->control('layer3');
            echo $this->Form->control('layer4');
            echo $this->Form->control('locale');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Form->control('align');
            echo $this->Form->control('border');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
