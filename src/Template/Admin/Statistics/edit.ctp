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
                ['action' => 'delete', $statistic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Statistics'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="statistics form large-9 medium-8 columns content">
    <?= $this->Form->create($statistic) ?>
    <fieldset>
        <legend><?= __('Edit Statistic') ?></legend>
        <?php
            echo $this->Form->control('number_1');
            echo $this->Form->control('number_2');
            echo $this->Form->control('number_3');
            echo $this->Form->control('number_4');
            echo $this->Form->control('title_1');
            echo $this->Form->control('title_2');
            echo $this->Form->control('title_3');
            echo $this->Form->control('title_4');
            echo $this->Form->control('locale');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
