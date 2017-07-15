<section class="content-header">
    <legend><?= __('Add Testimonial') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?></li>
    </ol>
</section>

<div class="testimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($testimonial, ['type' => 'file']); ?>
    <fieldset>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('author_name');
            echo $this->Ck->input('text');
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic', 'English']));
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
