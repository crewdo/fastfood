<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add product Category</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="productCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($productCategory, ['class' => 'form-material material-danger', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Product Category') ?></legend>

          <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
           </div>
              <div class="form-group row">
                  <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                  <div class="col-sm-10">
                    <select name="parent" class="form-control">
                      <option value="0">Không parent</option>
                     <?php foreach ($productParent as $key => $value) {
                       echo '<option value="'.$value->id.'">'.$value->name.'</option>';
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
