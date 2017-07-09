<section class="content-header">
    <legend><?= __('Add Text Block') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Text Blocks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>


<div class="textBlocks form large-9 medium-8 columns content">
        <?= $this->Form->create($textBlock, ['type' => 'file']); ?>

    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Ck->input('text');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
