<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="row images view large-9 medium-8 columns content" style="margin: 5px 5px">

    <div class="col-md-12 box box-block bg-white">
   <?= $this->Html->link(__('New Order'), ['action' => 'add']) ?>
   <h3><?= __('Orders') ?></h3>
    <table  class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Customer</th>
                <th scope="col">Status</th>
                <th scope="col">Message</th>
                <th scope="col">Address</th>
                <th scope="col">Ship time</th>
                <th scope="col">Total</th>
                <th scope="col">Created</th>
                <th scope="col">Modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= $order->has('customer') ? $this->Html->link($order->customer->name, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                <td><?= h($order->status) ?></td>
                <td><?= h($order->message) ?></td>
                <td><?= h($order->address) ?></td>
                <td><?= h($order->ship_time) ?></td>
                <td><?= $this->Number->format($order->total) ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(
                        $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')), ['action' => 'edit', $order->id], ['class'=>'','id'=>'', 'escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)],['class'=>'','id'=>'', 'escape' => false]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</div>


