<?php

/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
    <legend><?= __('Edit Career') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $career->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?></li>
    </ol>
</section>
<div class="careers form large-9 medium-8 columns content">
    <?= $this->Form->create($career) ?>
    <fieldset>
        <?php
            echo $this->Form->control('title');
            echo $this->Ck->input('description');
            echo $this->Form->control('salary');
            echo $this->Form->control('longitude');
            echo $this->Form->control('latitude');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);

//            echo $this->Form->control('created_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
