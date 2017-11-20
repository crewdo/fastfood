<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $infomation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $infomation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Infomations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="infomations form large-9 medium-8 columns content">
    <?= $this->Form->create($infomation) ?>
    <fieldset>
        <legend><?= __('Edit Infomation') ?></legend>
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
