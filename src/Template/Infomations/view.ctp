<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Infomation $infomation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Infomation'), ['action' => 'edit', $infomation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Infomation'), ['action' => 'delete', $infomation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $infomation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Infomations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Infomation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="infomations view large-9 medium-8 columns content">
    <h3><?= h($infomation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($infomation->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Nd') ?></th>
            <td><?= h($infomation->phone_nd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($infomation->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($infomation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($infomation->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($infomation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($infomation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($infomation->modified) ?></td>
        </tr>
    </table>
</div>
