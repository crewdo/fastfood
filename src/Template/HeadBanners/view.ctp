<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HeadBanner $headBanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Head Banner'), ['action' => 'edit', $headBanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Head Banner'), ['action' => 'delete', $headBanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $headBanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Head Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Head Banner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="headBanners view large-9 medium-8 columns content">
    <h3><?= h($headBanner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title St') ?></th>
            <td><?= h($headBanner->title_st) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Nd') ?></th>
            <td><?= h($headBanner->title_nd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image List Id') ?></th>
            <td><?= h($headBanner->image_list_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($headBanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Special Date') ?></th>
            <td><?= h($headBanner->start_special_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End  Special Date') ?></th>
            <td><?= h($headBanner->end__special_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($headBanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($headBanner->modified) ?></td>
        </tr>
    </table>
</div>
