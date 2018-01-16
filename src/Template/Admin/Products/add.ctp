<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add product</li>
</ol>
<div class="products form large-9 medium-8 columns content col-md-12 box box-block bg-white">

<?= $this->Flash->render() ?>

    <?= $this->Form->create(null, ['class' => 'form-material material-primary', 'enctype' => 'multipart/form-data'])  ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>


          <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
           </div>
                  <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                 <div class="col-sm-10">
                 <select name="category_id" class="form-control" >
                  <?php foreach($productCategories as $value){?>
                   <option value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
                  <?php }?>
                 </select>
               </div>
             </div>
                       <div class="form-group row">
                 <label for="name" class="col-sm-2 col-form-label">Đơn vị</label>
                 <div class="col-sm-10">
                 <select name="unit_id" class="form-control" >
                  <?php foreach($unit as $value){?>
                   <option value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
                  <?php }?>
                 </select>
               </div>
                </div>
                 <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">Giá bán</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="discount" class="col-sm-2 col-form-label">Giảm giá (%)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="discount" name="discount">
                  </div>
                </div>
          <div class="form-group row">
             <label for="name" class="col-sm-2 col-form-label">Tình trạng</label>
             <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input id="con" name="status" type="radio" class="custom-control-input" value="1" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Còn</span>
              </label>
                       <label class="custom-control custom-radio col-sm-6">
                <input id="het" name="status" type="radio" class="custom-control-input" value="0">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Hết</span>
              </label>
             </div>
          </div>
          <div class="form-group row">
                 <label for="discount" class="col-sm-2 col-form-label">Hot</label>
                 <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input name="hot" type="radio" class="custom-control-input" value="1">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Có</span>
              </label>
                 <label class="custom-control custom-radio col-sm-6">
                <input  name="hot" type="radio" class="custom-control-input" value="0" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Không</span>
              </label>
             </div>
    
                </div>
                      <div class="form-group row">
                     <label for="discount" class="col-sm-2 col-form-label">Đặc biệt</label>
                         <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input name="special" type="radio" class="custom-control-input" value="1">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Có</span>
              </label>
                       <label class="custom-control custom-radio col-sm-6">
                <input name="special" type="radio" class="custom-control-input" value="0" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Không</span>
              </label>
             </div>
    
                </div>
   

      
        
  
               <div class="form-group row">
                  <label for="discount" class="col-sm-2 col-form-label">Mô tả</label>
                   <div class="col-sm-10">
                      <textarea cols="40" rows="5" name="content" class="form-control"></textarea>
                    </div>
                  </div>
          
              <div class="form-group row">
              <label for="" class="col-sm-2">Ảnh đại diện</label>
               <div class="col-md-6">
                <input type="file" id="input-file-now" class="dropify" name="main_image" required />
             </div>
           
            </div>
            <?php
            echo $this->Form->hidden('review_number', ['name'=>'review_number', 'value'=> 0]);
            echo $this->Form->hidden('review', ['name'=>'review', 'value'=> 0]);
            ?>
            <div class="form-group row more-image"></div>

             <div class="form-group row">
                <button type="button" class="btn btn-success" id="more-image">More images</button>
             </div>
             


     
    </fieldset>
    <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
 <!--       <label for="input-file-now">Hình hiển thị</label> -->
           
</div>
</div>
