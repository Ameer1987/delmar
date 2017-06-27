<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HomeSlider[]|\Cake\Collection\CollectionInterface $homeSliders
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Slider'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeSliders index large-9 medium-8 columns content">
    <h3><?= __('Home Sliders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layer1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layer2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layer3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layer4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('align') ?></th>
                <th scope="col"><?= $this->Paginator->sort('border') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeSliders as $homeSlider): ?>
            <tr>
                <td><?= $this->Number->format($homeSlider->id) ?></td>
                <td><?= h($homeSlider->layer1) ?></td>
                <td><?= h($homeSlider->layer2) ?></td>
                <td><?= h($homeSlider->layer3) ?></td>
                <td><?= h($homeSlider->layer4) ?></td>
                <td><?= h($homeSlider->locale) ?></td>
                <td><?= h($homeSlider->image) ?></td>
                <td><?= h($homeSlider->align) ?></td>
                <td><?= h($homeSlider->border) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeSlider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeSlider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeSlider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeSlider->id)]) ?>
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
