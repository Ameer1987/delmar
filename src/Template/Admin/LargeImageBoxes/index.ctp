<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\LargeImageBox[]|\Cake\Collection\CollectionInterface $largeImageBoxes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Large Image Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="largeImageBoxes index large-9 medium-8 columns content">
    <h3><?= __('Large Image Boxes') ?></h3>
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
            <?php foreach ($largeImageBoxes as $largeImageBox): ?>
            <tr>
                <!--<td><?= $this->Number->format($largeImageBox->id) ?></td>-->
                <td><?= $this->Number->format($largeImageBox->order) ?></td>
                <td><?= h($largeImageBox->title) ?></td>
                <td><?= h($largeImageBox->photo) ?></td>
                <!--<td><?= h($largeImageBox->dir) ?></td>-->
                <td><?= h($largeImageBox->locale) ?></td>
                <td><?= $largeImageBox->has('blog') ? $this->Html->link($largeImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $largeImageBox->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $largeImageBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $largeImageBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $largeImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $largeImageBox->id)]) ?>
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
