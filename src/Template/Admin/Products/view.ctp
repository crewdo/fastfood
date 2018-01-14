
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Loại') ?></th>
            <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $product->product_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trạng thái') ?></th>
            <td><?= $product->status ? 'Còn' : 'Hết' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Đơn vị') ?></th>
            <td><?= $product->has('product_unit') ? $this->Html->link($product->product_unit->name, ['controller' => 'ProductUnits', 'action' => 'view', $product->product_unit->id]) : '' ?>

        <tr>
            <th scope="row"><?= __('Nội dung') ?></th>
            <td><?= h($product->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Giá bán') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Giảm giá') ?></th>
            <td><?= $this->Number->format($product->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hot') ?></th>
            <td><?= $product->hot ? 'Hot' : 'Không hot' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Đặc biệt') ?></th>
            <td><?= $product->special ? 'Đặc biệt' : 'Không đặc biệt' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Number') ?></th>
            <td><?= $this->Number->format($product->review_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= $this->Number->format($product->review) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Hình ảnh sản phẩm') ?></h4>
        <?php if (!empty($product->product_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Hình ảnh') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_images as $productImages): ?>
                <td><?php echo "<img src='/img/".h($productImages->link)."' width='150'>"; ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductImages', 'action' => 'view', $productImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductImages', 'action' => 'edit', $productImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductImages', 'action' => 'delete', $productImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
