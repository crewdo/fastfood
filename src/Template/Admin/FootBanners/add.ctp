<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Product Units'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add product Unit</li>
</ol>
<div class="box box-block bg-white">
<div class="footBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($footBanner) ?>
    <fieldset>
        <legend><?= __('Add Foot Banner') ?></legend>
        <?php
            echo $this->Form->control('image');
            echo $this->Form->control('title');
            echo $this->Form->control('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
