<section class="content-header">
    <legend><?= __('Add Branch') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
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
            echo $this->Form->control('google_map_title');
            echo $this->Ck->input('google_map_desc');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic', 'English']));
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
            echo $this->Ck->input('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
