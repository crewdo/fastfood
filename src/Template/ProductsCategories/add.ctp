<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Products Categories'), ['controller' => 'ProductsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Products Category'), ['controller' => 'ProductsCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($productsCategory) ?>
    <fieldset>
        <legend><?= __('Add Products Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('parent_id', ['options' => $parentProductsCategories]);
            echo $this->Form->control('sort_order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
