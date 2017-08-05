<section class="content-header">
    <legend><?= __('Edit Blog') ?></legend>
    <ol class="breadcrumb">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]
            )
        ?></li>
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
            echo $this->Form->control('main_img', ['type' => 'file']);
            $this->Form->input('main_dir', ['type' => 'hidden']);
            echo $this->Form->control('img_1', ['type' => 'file']);
            $this->Form->input('dir_1', ['type' => 'hidden']);
            echo $this->Form->control('img_2', ['type' => 'file']);
            $this->Form->input('dir_2', ['type' => 'hidden']);
            echo $this->Form->control('img_3', ['type' => 'file']);
            $this->Form->input('dir_3', ['type' => 'hidden']);
            echo $this->Form->control('img_4', ['type' => 'file']);
            $this->Form->input('dir_4', ['type' => 'hidden']);
            echo $this->Form->control('locale',array('label' => 'Locale','options' => ['Arabic'=> 'Arabic','English' =>'English']));
            echo $this->Form->control('created_at', array('label' => 'Posted date'));
        
?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
