<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit product Category</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order,['class' => 'form-material material-danger']) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('message');
            echo $this->Form->control('address');
            echo $this->Form->control('ship_time');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
