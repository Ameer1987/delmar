<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SmallImageBox[]|\Cake\Collection\CollectionInterface $smallImageBoxes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Small Image Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="smallImageBoxes index large-9 medium-8 columns content">
    <h3><?= __('Small Image Boxes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smallImageBoxes as $smallImageBox): ?>
            <tr>
                <td><?= $this->Number->format($smallImageBox->id) ?></td>
                <td><?= $this->Number->format($smallImageBox->order) ?></td>
                <td><?= h($smallImageBox->title) ?></td>
                <td><?= h($smallImageBox->photo) ?></td>
                <td><?= h($smallImageBox->dir) ?></td>
                <td><?= h($smallImageBox->locale) ?></td>
                <td><?= $smallImageBox->has('blog') ? $this->Html->link($smallImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $smallImageBox->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $smallImageBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $smallImageBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $smallImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smallImageBox->id)]) ?>
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
