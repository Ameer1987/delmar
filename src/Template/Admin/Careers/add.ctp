<?php

/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
    <legend><?= __('Add Career') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
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
            echo $this->Form->control('location');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);

//            echo $this->Form->control('created_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
