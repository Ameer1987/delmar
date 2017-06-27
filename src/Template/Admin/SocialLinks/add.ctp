<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Social Links'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socialLinks form large-9 medium-8 columns content">
    <?= $this->Form->create($socialLink) ?>
    <fieldset>
        <legend><?= __('Add Social Link') ?></legend>
        <?php
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('google_plus');
            echo $this->Form->control('instagram');
            echo $this->Form->control('linkedin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
