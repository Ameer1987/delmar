<section class="content-header">
    <legend><?= __('Edit Small Image Box') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $smallImageBox->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $smallImageBox->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Small Image Boxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>
<div class="smallImageBoxes form large-9 medium-8 columns content">
    <?= $this->Form->create($smallImageBox, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Ck->input('text');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);
            echo $this->Form->control('blog_id', array('options' => $blogs,'empty' => " "));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
