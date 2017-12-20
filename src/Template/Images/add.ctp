<?php
/**
* @var \App\View\AppView $this
*/
?>
<div class="content-area py-1">
    <div class="container-fluid">
        <h4>Add image</h4>
        <ol class="breadcrumb no-bg mb-1">
            <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/images">Image</a></li>
            <li class="breadcrumb-item active">Add image</li>
        </ol>
        <div class="box box-block bg-white">
            <?= $this->Form->create(null, ['class' => 'form-material', 'enctype' => 'multipart/form-data']) ?>
            <div class="form-group row">
               <div class="col-md-6 offset-sm-3">
                <input type="file" id="input-file-now" class="dropify" name="link"/>
             </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                </div>
            </div>

<!--               <input type="file" name="link" id="link">
         <input type="submit" value="Upload Image" name="submit"> -->
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>