<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit product Category</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="productCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($productCategory) ?>
    <fieldset>
        <legend><?= __('Edit Product Category') ?></legend>
                  <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên Loại</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required value="<?php echo $productCategory->name ?>">
                  </div>
           </div>
              <div class="form-group row">
                  <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                  <div class="col-sm-10">
                    <select name="parent" class="form-control">
                      <option value="0" <?php echo $productCategory->parent == $value->id ? 'selected': ''?>>Không parent</option>
                     <?php foreach ($productParent as $key => $value) {
                        if($productCategory->parent == $value->id)
                            echo '<option value="'.$value->id.'" selected>'.$value->name.'</option>';
                        else echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                     } ?>
                    </select>
                  </div>
           </div>
    </fieldset>
    <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
