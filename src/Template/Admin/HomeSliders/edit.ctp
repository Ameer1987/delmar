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
                ['action' => 'delete', $homeSlider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeSlider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="homeSliders form large-9 medium-8 columns content">
    <?= $this->Form->create($homeSlider) ?>
    <fieldset>
        <legend><?= __('Edit Home Slider') ?></legend>
        <?php
            echo $this->Form->control('layer1');
            echo $this->Form->control('layer2');
            echo $this->Form->control('layer3');
            echo $this->Form->control('layer4');
            echo $this->Form->control('locale');
            echo $this->Form->control('image');
            echo $this->Form->control('align');
            echo $this->Form->control('border');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
