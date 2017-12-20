<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FootBanner $footBanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Foot Banner'), ['action' => 'edit', $footBanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Foot Banner'), ['action' => 'delete', $footBanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footBanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Foot Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Foot Banner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="footBanners view large-9 medium-8 columns content">
    <h3><?= h($footBanner->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($footBanner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($footBanner->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($footBanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $this->Number->format($footBanner->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($footBanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($footBanner->modified) ?></td>
        </tr>
    </table>
</div>
