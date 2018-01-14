<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add Customers</li>
</ol>
<div class=" form large-9 medium-8 columns content col-md-12 box box-block bg-white">
    <?= $this->Flash->render('add') ?>
    <?= $this->Form->create(null, ['class' => 'form-material material-primary']) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
           <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                   <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control"  name="email" required>
                  </div>
                </div>
                   <div class="form-group row">
                  <label for="phone" class="col-sm-2 col-form-label">Điện thoại</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" required>
                  </div>
                </div>
                   <div class="form-group row">
                  <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" required>
                  </div>
                </div>
    </fieldset>
    <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
