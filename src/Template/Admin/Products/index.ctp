<div class="row images view large-9 medium-8 columns content" style="margin: 5px 5px">

    <div class="col-md-12 box box-block bg-white">
    <h3><?= __('Products') ?></h3>
    <table  class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" text-algin="center">ID</th>
                <th scope="col">Loại</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tên món ăn</th>
                 <th scope="col">Đơn vị</th>
                <th scope="col">Giá bán</th>              
                <th scope="col">Giảm giá</th>
                <th scope="col" class="actions" disabled="disabled">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'edit', $product->product_category->id]) : '' ?></td>
                <td><?= $product->status ? 'Còn' : 'Hết'; ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $product->has('product_unit') ? $this->Html->link($product->product_unit->name, ['controller' => 'ProductUnits', 'action' => 'view', $product->product_unit->id]) : '' ?></td>

                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $this->Number->format($product->discount) ?></td>
      
                      <td class="actions">

                 <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $product->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>

                 <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $product->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'escape'=>false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



</div>