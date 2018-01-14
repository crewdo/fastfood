<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">

<ol class="breadcrumb no-bg mb-1">
<li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
<li class="breadcrumb-item"><?= $this->Html->link(__('List Header Banners'), ['action' => 'index']) ?></li>
<li class="breadcrumb-item active">Add Header Banner</li>
</ol>
<div class="col-md-12 box box-block bg-white">
<div class="headBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($headBanner,['class' => 'form-material material-danger', 'enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Head Banner') ?></legend>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tiêu đề 1</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_st" name="title_st" required>
                  </div>
           </div>
                    <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tiêu đề 2</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title_nd" name="title_nd" required>
                  </div>
           </div>
                    <div class="form-group row">
                  <label for="start_special_date" class="col-sm-2 col-form-label">Ngày bắt đầu </label>
                  <div class="col-sm-10">
                    <div class="input-group">
                                <input type="date" class="form-control datepicker" placeholder="mm/dd/yyyy" name="start_special_date" required>
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                              </div>
                  </div>
           </div>
                        <div class="form-group row">
                  <label for="end_special_date" class="col-sm-2 col-form-label">Ngày kết thúc </label>
                  <div class="col-sm-10">
                        <div class="input-group">
                                <input type="date" class="form-control datepicker" placeholder="mm/dd/yyyy" name="end_special_date" required>
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                              </div>
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