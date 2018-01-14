<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Footer Banners'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit Footer Banner </li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="headBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($footBanner,['class' => 'form-material material-primary', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Edit Foot Banner') ?></legend>
                          <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tiêu đề </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" required value="<?php echo $footBanner->title?>">
                  </div>
           </div>
                 <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Nội dung</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="content" name="content" required value="<?php echo $footBanner->content?>" >
                  </div>
           </div>
             <div class="form-group row">
              <label for="" class="col-sm-2">Ảnh</label>
               <div class="col-md-6">
              <div class="product-img"> 
                    <img src="<?php echo $footBanner->image?>" class="img-responsive" style="width:150px"><input type="file" class="hide" name="banner"><button class="btn btn-warning">Change image</button></div>
             </div>
           
            </div>

    </fieldset>
      <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>

