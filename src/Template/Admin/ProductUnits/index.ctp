<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUnit[]|\Cake\Collection\CollectionInterface $productUnits
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">
    <ol class="breadcrumb no-bg mb-1">
        <li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
      <li class="breadcrumb-item active">List Product Units</li>
    </ol>
<div class="productUnits index large-9 medium-8 columns content box box-block bg-white">
    <h3><?= __('Product Units') ?></h3>
      <?= $this->Html->link('New Product Unit', [ 'action' => 'add'], ['class'=>'btn btn-primary mgb-10']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0" style="margin-top:10px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col" class="actions">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productUnits as $productUnit): ?>
            <tr>
                <td><?= $this->Number->format($productUnit->id) ?></td>
                <td><?= h($productUnit->name) ?></td>
                <td class="actions">

                 <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $productUnit->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>
                       <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $productUnit->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $productUnit->id), 'escape'=>false]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>