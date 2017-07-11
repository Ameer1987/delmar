<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Magazine[]|\Cake\Collection\CollectionInterface $magazines
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="magazines index large-9 medium-8 columns content">
    <h3><?= __('Magazines') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cover_img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cover_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folder') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folder_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($magazines as $magazine): ?>
            <tr>
                <td><?= $this->Number->format($magazine->id) ?></td>
                <td><?= h($magazine->title) ?></td>
                <td><?= h($magazine->description) ?></td>
                <td><?= h($magazine->cover_img) ?></td>
                <td><?= h($magazine->cover_dir) ?></td>
                <td><?= h($magazine->pdf) ?></td>
                <td><?= h($magazine->pdf_dir) ?></td>
                <td><?= h($magazine->folder) ?></td>
                <td><?= h($magazine->folder_dir) ?></td>
                <td><?= h($magazine->order) ?></td>
                <td><?= h($magazine->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $magazine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $magazine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?>
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
