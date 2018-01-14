<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Header Banners'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Edit product Category</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="headBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($headBanner,['class' => 'form-material material-primary', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Edit Head Banner') ?></legend>
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_st" name="title_st" required value="<?php echo $headBanner->title_st?>">
                  </div>
                </div>
                         <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tiêu đề 2</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_nd" name="title_nd" required value="<?php echo $headBanner->title_nd?>">
                  </div>
           </div>
                    <div class="form-group row">
                  <label for="start_special_date" class="col-sm-2 col-form-label">Ngày bắt đầu </label>
                  <div class="col-sm-10">
                    <div class="input-group">
                                <input type="date" class="form-control datepicker" placeholder="mm/dd/yyyy" name="start_special_date" required value="<?php echo $headBanner->start_special_date?>">
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                              </div>
                  </div>
           </div>
                        <div class="form-group row">
                  <label for="end_special_date" class="col-sm-2 col-form-label">Ngày kết thúc </label>
                  <div class="col-sm-10">
                        <div class="input-group">
                                <input type="date" class="form-control datepicker" placeholder="mm/dd/yyyy" name="end_special_date" required value="<?php echo $headBanner->end_special_date?>">
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                              </div>
                  </div>
           </div>
         <div class="form-group row">
              <label for="" class="col-sm-2">Ảnh</label>
               <div class="col-md-6">
                <div class="product-img"> 
                    <img src="<?php echo $headBanner->image?>" class="img-responsive" style="width:150px"><input type="file" class="hide" name="banner"><button class="btn btn-warning">Change image</button></div>

             </div>
           
            </div>

        <?php
            echo $this->Form->control('title_st');
            echo $this->Form->control('title_nd');
            echo $this->Form->control('start_special_date', ['empty' => true]);
            echo $this->Form->control('end__special_date', ['empty' => true]);
            echo $this->Form->control('image');
        ?>
    </fieldset>
   <?= $this->Form->button(__('Lưu'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
