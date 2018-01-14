<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create(null, ['class' => 'form-material', 'enctype' => 'multipart/form-data'])  ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $productCategories, 'label' => 'Loại món ăn', 'class' => '']);
            ?>
   
            <input type="radio" id="con" name="status" value="1" checked>
            <label for="con">Còn</label>
            <input type="radio" id="het" name="status" value="0">
            <label for="het">Hết</label>


            <label for="name">Tên món ăn</label>
            <input type="text" id="name" name="name">
            <label for="price">Giá bán</label>
            <input type="number" id="price" name="price">

            <?php
            echo $this->Form->control('unit_id', ['options' => $productUnits, 'label' => 'Đơn vị', 'class' => '']);
            echo $this->Form->hidden('review_number', ['name'=>'review_number', 'value'=> 0]);
            echo $this->Form->hidden('review', ['name'=>'review', 'value'=> 0]);
            ?>
            <label for="price">Giảm giá (%)</label>

            <input type="number" id="discount" name="discount" value="0">

                  <textarea cols="40" rows="5" name="content"></textarea>
                   <input type="radio" id="hot" name="hot" value="1">
                   <label for="hot">Hot</label>
   
                   <input type="radio" id="kohot" name="hot" value="0" checked>
                   <label for="kohot">Không hot</label>
 


            <input type="radio" id="dacbiet" name="special" value="1">
                   <label for="dacbiet">Đặc biệt</label>
   
            <input type="radio" id="kodacbiet" name="special" value="0" checked>
                      <label for="kodacbiet">Không đặc biệt</label>

            <!-- Image for product -->
     
  <input type="file" id="input-file-now" class="dropify" name="link"/>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 <!--       <label for="input-file-now">Hình hiển thị</label> -->
           
