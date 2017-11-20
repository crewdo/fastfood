<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Infomations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="infomations form large-9 medium-8 columns content">
    <?= $this->Form->create($infomation) ?>
    <fieldset>
        <legend><?= __('Add Infomation') ?></legend>
        <?php
            echo $this->Form->control('phone');
            echo $this->Form->control('phone_nd');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('facebook');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
