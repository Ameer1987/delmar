<section class="content-header">
        <legend><?= __('Add Blog') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Boxes'), ['controller' => 'HomeBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Box'), ['controller' => 'HomeBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['controller' => 'HomeSliders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Slider'), ['controller' => 'HomeSliders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List News Sliders'), ['controller' => 'LargeImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News Slider'), ['controller' => 'LargeImageBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vip Doctors'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vip Doctor'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Featured Offerss'), ['controller' => 'SmallImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Small Image Box'), ['controller' => 'SmallImageBoxes', 'action' => 'add']) ?></li>
    </ol>
</section>
<div class="blogs form large-9 medium-8 columns content">
    <?= $this->Form->create($blog, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title_1');
            echo $this->Form->control('title_2');
            echo $this->Form->control('title_3');
            echo $this->Ck->input('desc_1');
            echo $this->Ck->input('desc_2');
            echo $this->Ck->input('desc_3');
            echo $this->Form->input('main_img', ['type' => 'file']);
            $this->Form->input('main_dir', ['type' => 'hidden']);
            echo $this->Form->input('img_1', ['type' => 'file']);
            $this->Form->input('dir_1', ['type' => 'hidden']);
            echo $this->Form->input('img_2', ['type' => 'file']);
            $this->Form->input('dir_2', ['type' => 'hidden']);
            echo $this->Form->input('img_3', ['type' => 'file']);
            $this->Form->input('dir_3', ['type' => 'hidden']);
            echo $this->Form->input('img_4', ['type' => 'file']);
            $this->Form->input('dir_4', ['type' => 'hidden']);
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic', 'English']));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
