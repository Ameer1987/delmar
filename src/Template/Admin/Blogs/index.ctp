<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Blog[]|\Cake\Collection\CollectionInterface $blogs
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Boxes'), ['controller' => 'HomeBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Box'), ['controller' => 'HomeBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Sliders'), ['controller' => 'HomeSliders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Slider'), ['controller' => 'HomeSliders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Large Image Boxes'), ['controller' => 'LargeImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Large Image Box'), ['controller' => 'LargeImageBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Responsive Image Boxes'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsive Image Box'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Small Image Boxes'), ['controller' => 'SmallImageBoxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Small Image Box'), ['controller' => 'SmallImageBoxes', 'action' => 'add']) ?></li>
        <!--<li><?= $this->Html->link(__('List Social Links'), ['controller' => 'SocialLinks', 'action' => 'index']) ?></li>-->
        <!--<li><?= $this->Html->link(__('New Social Link'), ['controller' => 'SocialLinks', 'action' => 'add']) ?></li>-->
    </ul>
</nav>
<div class="blogs index large-9 medium-8 columns content">
    <h3><?= __('Blogs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('dir') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
            <tr>
                <!--<td><?= $this->Number->format($blog->id) ?></td>-->
                <td><?= $this->Number->format($blog->order) ?></td>
                <td><?= h($blog->title) ?></td>
                <td><?= h($blog->photo) ?></td>
                <!--<td><?= h($blog->dir) ?></td>-->
                <td><?= h($blog->locale) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?>
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
