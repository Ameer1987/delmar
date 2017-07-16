<section class="content-header">
    <legend><?= __('Edit Home Box') ?></legend>
    <ol class="breadcrumb">
        
        <li><?= $this->Html->link(__('List Home Boxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>


<div class="homeBoxes form large-9 medium-8 columns content">
    <?= $this->Form->create($homeBox, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Form->control('avatar');
            echo $this->Ck->input('text');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic'=> 'Arabic','English' =>'English']));
            echo $this->Form->control('blog_id', array('options' => $blogs,'empty' => " "));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
