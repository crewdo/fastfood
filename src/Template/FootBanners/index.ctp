<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FootBanner[]|\Cake\Collection\CollectionInterface $footBanners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Foot Banner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="footBanners index large-9 medium-8 columns content">
    <h3><?= __('Foot Banners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footBanners as $footBanner): ?>
            <tr>
                <td><?= $this->Number->format($footBanner->id) ?></td>
                <td><?= $footBanner->has('image') ? $this->Html->link($footBanner->image->id, ['controller' => 'Images', 'action' => 'view', $footBanner->image->id]) : '' ?></td>
                <td><?= h($footBanner->title) ?></td>
                <td><?= h($footBanner->content) ?></td>
                <td><?= h($footBanner->created) ?></td>
                <td><?= h($footBanner->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $footBanner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footBanner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footBanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footBanner->id)]) ?>
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
