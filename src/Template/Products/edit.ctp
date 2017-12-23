
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Chỉnh sửa sản phẩm') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $productCategories]);
            ?>
             <input type="radio" id="con" name="status" value="1" <?= $product->status ? 'checked' : '' ?> >
            <label for="con">Còn</label>
            <input type="radio" id="het" name="status" value="0" <?= $product->status ? '' : 'checked' ?> >
            <label for="het">Hết</label>
<?php

            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('unit_id', ['options' => $productUnits]);
            echo $this->Form->control('content');
            echo $this->Form->control('discount');
?>

        <input type="radio" id="hot" name="hot" value="1" <?= $product->status ? 'checked' : '' ?>>
                   <label for="hot">Hot</label>
   
                   <input type="radio" id="kohot" name="hot" value="0" <?= $product->status ? '' : 'checked' ?>>
                   <label for="kohot">Không hot</label>
 


            <input type="radio" id="dacbiet" name="special" value="1" <?= $product->status ? 'checked' : '' ?>>
                   <label for="dacbiet">Đặc biệt</label>
   
            <input type="radio" id="kodacbiet" name="special" value="0" <?= $product->status ? '' : 'checked' ?>>
                      <label for="kodacbiet">Không đặc biệt</label>
<?php
            echo $this->Form->control('review_number');
            echo $this->Form->control('review');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
