<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
<div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item active">information</li>
</ol>
<div class="products form large-9 medium-8 columns content col-md-12 box box-block bg-white">

<?= $this->Flash->render() ?>
<div class="informations form large-9 medium-8 columns content">
<?php if(empty($informations_i))
 echo $this->Form->create($information, ['url'=>['controller'=>'Informations', 'action'=>'add'],'class'=>'form-material material-primary']);
else 
echo $this->Form->create($informations_i, ['url'=>['controller'=>'Informations', 'action'=>'edit'],'class'=>'form-material material-primary']);
?>
    <fieldset>
        <legend><?= __('Information') ?></legend>
        <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Điện thoại 1 </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" required value="<?php echo !empty($informations_i->phone) ?$informations_i->phone : '' ?>">
                  </div>
           </div>
           <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Điện thoại 2 </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone_nd" name="phone_nd" value="<?php echo !empty($informations_i->phone) ?$informations_i->phone : '' ?>">
                  </div>
           </div>
           <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Địa chỉ </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" required value="<?php echo !empty($informations_i->phone) ?$informations_i->phone : '' ?>">
                  </div>
           </div>
           <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required value="<?php echo !empty($informations_i->email) ?$informations_i->email : '' ?>">
                  </div>
           </div>
           <div class="form-group row">
                  <label class="col-sm-2 col-form-label">facebook</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="facebook" name="facebook" required value="<?php echo !empty($informations_i->facebook) ?$informations_i->facebook : '' ?>">
                  </div>
           </div>
    </fieldset>
    <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
