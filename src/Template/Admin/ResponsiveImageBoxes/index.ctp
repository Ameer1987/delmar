<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ResponsiveImageBox[]|\Cake\Collection\CollectionInterface $responsiveImageBoxes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsive Image Box'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsiveImageBoxes index large-9 medium-8 columns content">
    <h3><?= __('Responsive Image Boxes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsiveImageBoxes as $responsiveImageBox): ?>
            <tr>
                <td><?= $this->Number->format($responsiveImageBox->id) ?></td>
                <td><?= h($responsiveImageBox->title) ?></td>
                <td><?= h($responsiveImageBox->subtitle) ?></td>
                <td><?= h($responsiveImageBox->locale) ?></td>
                <td><?= h($responsiveImageBox->image) ?></td>
                <td><?= h($responsiveImageBox->link) ?></td>
                <td><?= $responsiveImageBox->has('blog') ? $this->Html->link($responsiveImageBox->blog->title, ['controller' => 'Blogs', 'action' => 'view', $responsiveImageBox->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsiveImageBox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsiveImageBox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsiveImageBox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsiveImageBox->id)]) ?>
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
