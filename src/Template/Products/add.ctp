<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products Categories'), ['controller' => 'ProductsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Category'), ['controller' => 'ProductsCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders Details'), ['controller' => 'OrdersDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['controller' => 'OrdersDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $productsCategories]);
            echo $this->Form->control('status');
            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('unit');
            echo $this->Form->control('content');
            echo $this->Form->control('discount');
            echo $this->Form->control('new');
            echo $this->Form->control('special');
            echo $this->Form->control('review_number');
            echo $this->Form->control('review');
            echo $this->Form->control('image_list_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
