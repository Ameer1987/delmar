<section class="content-header">
    <legend><?= __('Add Contact') ?></legend>
    <ol class="breadcrumb">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ol>
</section>

<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <?php
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('google_plus');
            echo $this->Form->control('instagram');
            echo $this->Form->control('linkedin');
            echo $this->Form->control('address');
            echo $this->Form->control('tel1');
            echo $this->Form->control('tel2');
            echo $this->Form->control('mob');
            echo $this->Form->control('email');
            echo $this->Form->control('longitude');
            echo $this->Form->control('latitude');
            echo $this->Form->control('hotline');
            echo $this->Form->select('locale', ['Arabic'=> 'Arabic','English' =>'English']);
            echo $this->Ck->input('text');
            echo $this->Form->control('name');
            echo $this->Form->control('blog_id', ['options' => $blogs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
