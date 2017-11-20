<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory[]|\Cake\Collection\CollectionInterface $productsCategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsCategories index large-9 medium-8 columns content">
    <h3><?= __('Products Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsCategories as $productsCategory): ?>
            <tr>
                <td><?= $this->Number->format($productsCategory->id) ?></td>
                <td><?= h($productsCategory->name) ?></td>
                <td><?= $productsCategory->has('parent_products_category') ? $this->Html->link($productsCategory->parent_products_category->name, ['controller' => 'ProductsCategories', 'action' => 'view', $productsCategory->parent_products_category->id]) : '' ?></td>
                <td><?= $this->Number->format($productsCategory->sort_order) ?></td>
                <td><?= h($productsCategory->created) ?></td>
                <td><?= h($productsCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id)]) ?>
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
