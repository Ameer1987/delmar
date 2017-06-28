<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Statistic[]|\Cake\Collection\CollectionInterface $statistics
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Statistic'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statistics index large-9 medium-8 columns content">
    <h3><?= __('Statistics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statistics as $statistic): ?>
            <tr>
                <td><?= $this->Number->format($statistic->id) ?></td>
                <td><?= h($statistic->number_1) ?></td>
                <td><?= h($statistic->number_2) ?></td>
                <td><?= h($statistic->number_3) ?></td>
                <td><?= h($statistic->number_4) ?></td>
                <td><?= h($statistic->title_1) ?></td>
                <td><?= h($statistic->title_2) ?></td>
                <td><?= h($statistic->title_3) ?></td>
                <td><?= h($statistic->title_4) ?></td>
                <td><?= h($statistic->locale) ?></td>
                <td><?= h($statistic->photo) ?></td>
                <td><?= h($statistic->dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statistic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statistic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id)]) ?>
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
