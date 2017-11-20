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
                ['action' => 'delete', $footBanner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $footBanner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Foot Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="footBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($footBanner) ?>
    <fieldset>
        <legend><?= __('Edit Foot Banner') ?></legend>
        <?php
            echo $this->Form->control('image_id', ['options' => $images]);
            echo $this->Form->control('title');
            echo $this->Form->control('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
