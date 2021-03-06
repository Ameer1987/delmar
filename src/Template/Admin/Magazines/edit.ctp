<?php

/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
    <legend><?= __('Edit Magazine') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $magazine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?></li>
    </ol>
</section>
<div class="magazines form large-9 medium-8 columns content">
    <?= $this->Form->create($magazine, ['type' => 'file']) ?>
    <fieldset>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('cover_img', ['type' => 'file']);
            $this->Form->input('cover_dir', ['type' => 'hidden']);
            echo $this->Form->control('pdf', ['type' => 'file']);
            $this->Form->input('pdf_dir', ['type' => 'hidden']);
            echo $this->Form->control('folder', ['type' => 'file']);
            $this->Form->input('folder_dir', ['type' => 'hidden']);
            echo $this->Form->control('order');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic' =>'Arabic', 'English' =>'English']));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
