<section class="content-header">
    <legend><?= __('Add Statistic') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Statistics'), ['action' => 'index']) ?></li>
    </ol>
</section>

<div class="statistics form large-9 medium-8 columns content">
    <?= $this->Form->create($statistic, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('number_1');
            echo $this->Form->control('number_2');
            echo $this->Form->control('number_3');
            echo $this->Form->control('number_4');
            echo $this->Form->control('title_1');
            echo $this->Form->control('title_2');
            echo $this->Form->control('title_3');
            echo $this->Form->control('title_4');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic' =>'Arabic', 'English' =>'English']));
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
