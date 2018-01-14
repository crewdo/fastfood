<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($productCategory) ?>
    <fieldset>
        <legend><?= __('Add Product Category') ?></legend>

          <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
           </div>
              <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
           </div>
            <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
           </div>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('parent');
            echo $this->Form->control('sort_order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
