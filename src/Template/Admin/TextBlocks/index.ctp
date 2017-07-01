<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TextBlock[]|\Cake\Collection\CollectionInterface $textBlocks
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Text Block'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="textBlocks index large-9 medium-8 columns content">
    <h3><?= __('Text Blocks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($textBlocks as $textBlock): ?>
            <tr>
                <!--<td><?= $this->Number->format($textBlock->id) ?></td>-->
                <td><?= $this->Number->format($textBlock->order) ?></td>
                <td><?= h($textBlock->title) ?></td>
                <td><?= h($textBlock->photo) ?></td>
                <!--<td><?= h($textBlock->dir) ?></td>-->
                <td><?= h($textBlock->locale) ?></td>
                <td><?= $textBlock->has('blog') ? $this->Html->link($textBlock->blog->title, ['controller' => 'Blogs', 'action' => 'view', $textBlock->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $textBlock->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $textBlock->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $textBlock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textBlock->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
