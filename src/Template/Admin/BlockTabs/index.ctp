<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BlockTab[]|\Cake\Collection\CollectionInterface $blockTabs
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Block Tab'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blockTabs index large-9 medium-8 columns content">
    <h3><?= __('Block Tabs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('header_icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('header_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blockTabs as $blockTab): ?>
            <tr>
                <!--<td><?= $this->Number->format($blockTab->id) ?></td>-->
                <td><?= $this->Number->format($blockTab->order) ?></td>
                <td><?= h($blockTab->title) ?></td>
                <td><?= h($blockTab->subtitle) ?></td>
                <td><?= h($blockTab->locale) ?></td>
                <td><?= h($blockTab->photo) ?></td>
                <!--<td><?= h($blockTab->dir) ?></td>-->
                <td><?= h($blockTab->header_icon) ?></td>
                <td><?= h($blockTab->header_title) ?></td>
                <td><?= $blockTab->has('blog') ? $this->Html->link($blockTab->blog->title, ['controller' => 'Blogs', 'action' => 'view', $blockTab->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blockTab->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blockTab->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blockTab->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockTab->id)]) ?>
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
