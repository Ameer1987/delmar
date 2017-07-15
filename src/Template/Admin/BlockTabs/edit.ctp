<section class="content-header">
        <legend><?= __('Edit Block Tab') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blockTab->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blockTab->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Block Tabs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>


<div class="contacts form large-9 medium-8 columns content">
        <?= $this->Form->create($blockTab, ['type' => 'file']); ?>

    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic', 'English']));
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Ck->input('text');
            echo $this->Form->control('header_icon');
            echo $this->Form->control('header_title');
            echo $this->Form->control('blog_id', array('options' => $blogs,'empty' => " "));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
