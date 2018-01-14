<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Foot Banners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
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
