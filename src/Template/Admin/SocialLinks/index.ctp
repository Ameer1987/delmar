<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SocialLink[]|\Cake\Collection\CollectionInterface $socialLinks
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Social Link'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialLinks index large-9 medium-8 columns content">
    <h3><?= __('Social Links') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('google_plus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instagram') ?></th>
                <th scope="col"><?= $this->Paginator->sort('linkedin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('blog_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socialLinks as $socialLink): ?>
            <tr>
                <td><?= $this->Number->format($socialLink->id) ?></td>
                <td><?= h($socialLink->facebook) ?></td>
                <td><?= h($socialLink->twitter) ?></td>
                <td><?= h($socialLink->google_plus) ?></td>
                <td><?= h($socialLink->instagram) ?></td>
                <td><?= h($socialLink->linkedin) ?></td>
                <td><?= $socialLink->has('blog') ? $this->Html->link($socialLink->blog->title, ['controller' => 'Blogs', 'action' => 'view', $socialLink->blog->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $socialLink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialLink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialLink->id)]) ?>
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
