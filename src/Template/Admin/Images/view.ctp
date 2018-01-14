<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foot Banners'), ['controller' => 'FootBanners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Foot Banner'), ['controller' => 'FootBanners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($image->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($image->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($image->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Foot Banners') ?></h4>
        <?php if (!empty($image->foot_banners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->foot_banners as $footBanners): ?>
            <tr>
                <td><?= h($footBanners->id) ?></td>
                <td><?= h($footBanners->image_id) ?></td>
                <td><?= h($footBanners->title) ?></td>
                <td><?= h($footBanners->content) ?></td>
                <td><?= h($footBanners->created) ?></td>
                <td><?= h($footBanners->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FootBanners', 'action' => 'view', $footBanners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FootBanners', 'action' => 'edit', $footBanners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FootBanners', 'action' => 'delete', $footBanners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footBanners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
