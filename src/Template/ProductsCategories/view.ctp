<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory $productsCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Category'), ['action' => 'edit', $productsCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Category'), ['action' => 'delete', $productsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Products Categories'), ['controller' => 'ProductsCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Products Category'), ['controller' => 'ProductsCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsCategories view large-9 medium-8 columns content">
    <h3><?= h($productsCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productsCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Products Category') ?></th>
            <td><?= $productsCategory->has('parent_products_category') ? $this->Html->link($productsCategory->parent_products_category->name, ['controller' => 'ProductsCategories', 'action' => 'view', $productsCategory->parent_products_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Order') ?></th>
            <td><?= $this->Number->format($productsCategory->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productsCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productsCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products Categories') ?></h4>
        <?php if (!empty($productsCategory->child_products_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Sort Order') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productsCategory->child_products_categories as $childProductsCategories): ?>
            <tr>
                <td><?= h($childProductsCategories->id) ?></td>
                <td><?= h($childProductsCategories->name) ?></td>
                <td><?= h($childProductsCategories->parent_id) ?></td>
                <td><?= h($childProductsCategories->sort_order) ?></td>
                <td><?= h($childProductsCategories->created) ?></td>
                <td><?= h($childProductsCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsCategories', 'action' => 'view', $childProductsCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsCategories', 'action' => 'edit', $childProductsCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsCategories', 'action' => 'delete', $childProductsCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childProductsCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
