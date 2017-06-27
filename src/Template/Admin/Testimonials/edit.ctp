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
                ['action' => 'delete', $testimonial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($testimonial) ?>
    <fieldset>
        <legend><?= __('Edit Testimonial') ?></legend>
        <?php
            echo $this->Form->control('author_name');
            echo $this->Form->control('text');
            echo $this->Form->control('locale');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
