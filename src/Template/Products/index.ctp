<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Categories'), ['controller' => 'ProductsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Category'), ['controller' => 'ProductsCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders Details'), ['controller' => 'OrdersDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['controller' => 'OrdersDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $product->has('products_category') ? $this->Html->link($product->products_category->name, ['controller' => 'ProductsCategories', 'action' => 'view', $product->products_category->id]) : '' ?></td>
                <td><?= $this->Number->format($product->status) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= h($product->unit) ?></td>
                <td><?= h($product->content) ?></td>
                <td><?= $this->Number->format($product->discount) ?></td>
                <td><?= $this->Number->format($product->new) ?></td>
                <td><?= $this->Number->format($product->special) ?></td>
                <td><?= $this->Number->format($product->review_number) ?></td>
                <td><?= $this->Number->format($product->review) ?></td>
                <td><?= h($product->image_list_id) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
