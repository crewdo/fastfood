<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products Categories'), ['controller' => 'ProductsCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Category'), ['controller' => 'ProductsCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders Details'), ['controller' => 'OrdersDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['controller' => 'OrdersDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Products Category') ?></th>
            <td><?= $product->has('products_category') ? $this->Html->link($product->products_category->name, ['controller' => 'ProductsCategories', 'action' => 'view', $product->products_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= h($product->unit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($product->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image List Id') ?></th>
            <td><?= h($product->image_list_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($product->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($product->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New') ?></th>
            <td><?= $this->Number->format($product->new) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Special') ?></th>
            <td><?= $this->Number->format($product->special) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Number') ?></th>
            <td><?= $this->Number->format($product->review_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= $this->Number->format($product->review) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders Details') ?></h4>
        <?php if (!empty($product->orders_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Orders Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Money') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->orders_details as $ordersDetails): ?>
            <tr>
                <td><?= h($ordersDetails->id) ?></td>
                <td><?= h($ordersDetails->orders_id) ?></td>
                <td><?= h($ordersDetails->product_id) ?></td>
                <td><?= h($ordersDetails->quantity) ?></td>
                <td><?= h($ordersDetails->money) ?></td>
                <td><?= h($ordersDetails->created) ?></td>
                <td><?= h($ordersDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdersDetails', 'action' => 'view', $ordersDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdersDetails', 'action' => 'edit', $ordersDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdersDetails', 'action' => 'delete', $ordersDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
