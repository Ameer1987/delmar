<section class="content-header">
    <legend><?= __('Edit Home Slider') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $homeSlider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeSlider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>
<div class="homeSliders form large-9 medium-8 columns content">
    <?= $this->Form->create($homeSlider, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('layer1');
            echo $this->Form->control('layer2');
            echo $this->Form->control('layer3');
            echo $this->Form->control('layer4');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Form->control('align');
            echo $this->Form->control('border');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
