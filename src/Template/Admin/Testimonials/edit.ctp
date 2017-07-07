<section class="content-header">
    <legend><?= __('Edit Contact') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testimonial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?></li>
    </ol>
</section>
<div class="testimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($testimonial, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit Testimonial') ?></legend>
        <?php
            echo $this->Form->control('order');
            echo $this->Form->control('author_name');
            echo $this->Ck->input('text');
            echo $this->Form->control('locale');
            echo $this->Form->input('photo', ['type' => 'file']);
            $this->Form->input('dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
