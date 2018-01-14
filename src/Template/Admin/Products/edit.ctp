<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Produtcs'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit product</li>
</ol>
<div class="products form large-9 medium-8 columns content col-md-12 box box-block bg-white">
    <?= $this->Form->create($product,['class' => 'form-material material-success', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Chỉnh sửa sản phẩm') ?></legend>

          <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required value="<?php echo $product->name?>">
                  </div>
                </div>
                  <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                 <div class="col-sm-10">
                   <select name="category_id" class="form-control" >
                  <?php foreach($productCategories as $value){?>
                   <option value="<?php echo $value->id ?>" <?php echo $product->category_id == $value->id ? 'selected': '' ?>><?php echo $value->name; ?></option>
                  <?php }?>
                 </select>
               </div>
             </div>
                       <div class="form-group row">
                 <label for="name" class="col-sm-2 col-form-label">Đơn vị</label>
                 <div class="col-sm-10">
                 <select name="unit_id" class="form-control" >
                  <?php foreach($unit as $value){?>
                   <option value="<?php echo $value->id ?>" <?php echo $product->unit_id == $value->id ? 'selected': '' ?> ><?php echo $value->name; ?></option>
                  <?php }?>
                 </select>
               </div>
                </div>
                 <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">Giá bán</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" required value="<?php echo  $product->price?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="discount" class="col-sm-2 col-form-label">Giảm giá (%)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="discount" name="discount" value="<?php echo  $product->price?>">
                  </div>
                </div>
          <div class="form-group row">
             <label for="name" class="col-sm-2 col-form-label">Tình trạng</label>
             <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input id="con" name="status" type="radio" class="custom-control-input" value="1" <?php echo $product->status == 1  ? 'checked': ''?> >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Còn</span>
              </label>
                       <label class="custom-control custom-radio col-sm-6">
                <input id="het" name="status" type="radio" class="custom-control-input" value="0" <?php echo $product->status == 0  ? 'checked': ''?>>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Hết</span>
              </label>
             </div>
          </div>
          <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">Hot</label>
                 <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input name="hot" type="radio" class="custom-control-input" value="1" <?php echo $product->hot == 1  ? 'checked': ''?>>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Có</span>
              </label>
                 <label class="custom-control custom-radio col-sm-6">
                <input  name="hot" type="radio" class="custom-control-input" value="0" <?php echo $product->hot == 0  ? 'checked': ''?>>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Không</span>
              </label>
             </div>
    
                </div>
                      <div class="form-group row">
                     <label for="discount" class="col-sm-2 col-form-label">Đặc biệt</label>
                         <div class="col-sm-10">
                 <label class="custom-control custom-radio col-sm-4">
                <input name="special" type="radio" class="custom-control-input" value="1" <?php echo $product->special == 1  ? 'checked': ''?> checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Có</span>
              </label>
                       <label class="custom-control custom-radio col-sm-6">
                <input name="special" type="radio" class="custom-control-input" value="0" <?php echo $product->special == 0  ? 'checked': ''?>>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Không</span>
              </label>
             </div>
    
              </div>
               <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Mô tả</label>
                   <div class="col-sm-10">
                      <textarea cols="40" rows="5" name="content" class="form-control"><?php $product->content?></textarea>
                    </div>
           </div>
            <div class="form-group row more-image">

              <?php $count = 0;
              foreach ($productImages as $value) {
                if($value->feature == 1){
                   echo '<div class="product-img"> <img src="'.$value->link.'" class="img-responsive" style="width:150px" id="fearure-image"><input type="file" class="hide" name="main_image"><button class="btn btn-warning">Change image</button></div>';
                }
                else {
                  $count ++;
                     echo '<div class="product-img"> <img src="'.$value->link.'" class="img-responsive" style="width:150px"><input type="file" class="hide" name="p-image_'.$count.'"><button class="btn btn-warning">Change image</button></div>';
                }
  
              } ?>
            </div>
             <div class="form-group row">
                <button type="button" class="btn btn-success" id="more-image">More images</button>
             </div>
           <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">review_number </label>
                <div class="col-sm-10">
                 <?php echo  $product->review_number;?>
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">review</label>
                <div class="col-sm-10">
                  <?php echo $product->review;?>
                </div>
              </div>
    </fieldset>
       <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
  </div>
</div>
</div>
