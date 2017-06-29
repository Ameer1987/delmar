<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SliderBranch[]|\Cake\Collection\CollectionInterface $sliderBranches
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Slider Branch'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sliderBranches index large-9 medium-8 columns content">
    <h3><?= __('Slider Branches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sliderBranches as $sliderBranch): ?>
            <tr>
                <td><?= $this->Number->format($sliderBranch->id) ?></td>
                <td><?= $this->Number->format($sliderBranch->order) ?></td>
                <td><?= h($sliderBranch->title) ?></td>
                <td><?= h($sliderBranch->subtitle) ?></td>
                <td><?= h($sliderBranch->longitude) ?></td>
                <td><?= h($sliderBranch->latitude) ?></td>
                <td><?= h($sliderBranch->locale) ?></td>
                <td><?= h($sliderBranch->photo) ?></td>
                <td><?= h($sliderBranch->dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sliderBranch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sliderBranch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sliderBranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderBranch->id)]) ?>
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
