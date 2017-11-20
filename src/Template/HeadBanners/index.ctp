<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HeadBanner[]|\Cake\Collection\CollectionInterface $headBanners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Head Banner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="headBanners index large-9 medium-8 columns content">
    <h3><?= __('Head Banners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_st') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_nd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_special_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end__special_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($headBanners as $headBanner): ?>
            <tr>
                <td><?= $this->Number->format($headBanner->id) ?></td>
                <td><?= h($headBanner->title_st) ?></td>
                <td><?= h($headBanner->title_nd) ?></td>
                <td><?= h($headBanner->start_special_date) ?></td>
                <td><?= h($headBanner->end__special_date) ?></td>
                <td><?= h($headBanner->image_list_id) ?></td>
                <td><?= h($headBanner->created) ?></td>
                <td><?= h($headBanner->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $headBanner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $headBanner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $headBanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $headBanner->id)]) ?>
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
