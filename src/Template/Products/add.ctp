<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create(null) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $productCategories]);
            echo $this->Form->control('status');
            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('unit_id', ['options' => $productUnits]);
            echo $this->Form->control('content');
            echo $this->Form->control('discount');
            echo $this->Form->control('hot');
            echo $this->Form->control('special');
            echo $this->Form->control('review_number');
            echo $this->Form->control('review');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
