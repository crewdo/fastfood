<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">
    <ol class="breadcrumb no-bg mb-1">
       <li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
      <li class="breadcrumb-item active">List Customers</li>
    </ol>
<div class="row images view large-9 medium-8 columns content" style="margin: 5px 5px">

    <div class="col-md-12 box box-block bg-white">
<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
        <?= $this->Html->link('New Customer', ['controller' => 'Products', 'action' => 'add'], ['class'=>'btn btn-primary mgb-10']) ?>
      <table  class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0" style="margin-top:10px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col"Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->id) ?></td>
                <td><?= h($customer->name) ?></td>
                <td><?= h($customer->email) ?></td>
                <td><?= h($customer->phone) ?></td>
                <td><?= h($customer->address) ?></td>
                <td class="actions">

                 <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $customer->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>

                 <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $customer->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'escape'=>false]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>
</div>