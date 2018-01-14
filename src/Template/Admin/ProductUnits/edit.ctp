<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Product Units'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit product Unit</li>
</ol>
<div class=" form large-9 medium-8 columns content col-md-12 box box-block bg-white"
<div class="productUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($productUnit) ?>
    <fieldset>
        <legend><?= __('Edit Product Unit') ?></legend>
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required value="<?php echo $productUnit->name?>">
                  </div>
                </div>
    </fieldset>
    <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
