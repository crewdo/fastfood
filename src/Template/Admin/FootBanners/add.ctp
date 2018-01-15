<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Footer Banners'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add Footer Banner</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="headBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($footBanner,['class' => 'form-material material-danger', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Foot Banner') ?></legend>
                    <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tiêu đề </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>
           </div>
                 <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Nội dung</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="content" name="content" required>
                  </div>
           </div>
             <div class="form-group row">
              <label for="" class="col-sm-2">Ảnh</label>
               <div class="col-md-6">
                <input type="file" id="input-file-now" class="dropify" name="banner" required />
             </div>
           
            </div>
    </fieldset>
      <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
