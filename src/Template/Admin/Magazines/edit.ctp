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
                ['action' => 'delete', $magazine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="magazines form large-9 medium-8 columns content">
    <?= $this->Form->create($magazine, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Magazine') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->input('cover_img', ['type' => 'file']);
            $this->Form->input('cover_dir', ['type' => 'hidden']);
            echo $this->Form->input('pdf', ['type' => 'file']);
            $this->Form->input('pdf_dir', ['type' => 'hidden']);
            echo $this->Form->input('folder', ['type' => 'file']);
            $this->Form->input('folder_dir', ['type' => 'hidden']);
            echo $this->Form->control('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
