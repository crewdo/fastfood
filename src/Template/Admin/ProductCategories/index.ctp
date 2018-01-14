<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductCategory[]|\Cake\Collection\CollectionInterface $productCategories
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">
    <ol class="breadcrumb no-bg mb-1">
       <li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
      <li class="breadcrumb-item active">List Product Categories</li>
    </ol>

<div class="col-md-12 box box-block bg-white">
<div class="productCategories index large-9 medium-8 columns content">
    <h3><?= __('Product Categories') ?></h3>
     <?= $this->Html->link('New Category', ['action' => 'add'], ['class'=>'btn btn-primary mgb-10']) ?>
    <table class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0" style="margin-top:10px">
        <thead>
            <tr>
                 <th scope="col">ID</th>
                <th scope="col">Tên </th>
                <th scope="col">Parent</th>
                <th scope="col" class="action>s"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productCategories as $productCategory): ?>
            <tr>
                <td><?= $this->Number->format($productCategory->id) ?></td>
                <td><?= h($productCategory->name) ?></td>
                <td><?= $this->Number->format($productCategory->parent) ?></td>
                <td class="actions">
                          <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $productCategory->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>

                 <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $productCategory->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id), 'escape'=>false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
