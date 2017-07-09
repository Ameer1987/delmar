<section class="content-header">
    <legend><?= __('Add Slider Branch') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Slider Branches'), ['action' => 'index']) ?></li>
    </ol>
</section>
<div class="sliderBranches form large-9 medium-8 columns content">
        <?= $this->Form->create($sliderBranch, ['type' => 'file']); ?>

    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('longitude');
            echo $this->Form->control('latitude');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Ck->input('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
