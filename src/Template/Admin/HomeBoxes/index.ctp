<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HomeBox[]|\Cake\Collection\CollectionInterface $homeBoxes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeBoxes index large-9 medium-8 columns content">
    <h3><?= __('Home Boxes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeBoxes as $homeBox): ?>
            <tr>
                <td><?= $this->Number->format($homeBox->id) ?></td>
                <td><?= h($homeBox->title) ?></td>
                <td><?= h($homeBox->photo) ?></td>
                <td><?= h($homeBox->dir) ?></td>
                <td><?= h($homeBox->link) ?></td>
                <td><?= h($homeBox->avatar) ?></td>
                <td><?= h($homeBox->locale) ?></td>
                <td><?= $homeBox->has('blog') ? $this->Html->link($homeBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $homeBox->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeBox->id)]) ?>
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
