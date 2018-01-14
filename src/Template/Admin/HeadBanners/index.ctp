<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HeadBanner[]|\Cake\Collection\CollectionInterface $headBanners
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">
    <ol class="breadcrumb no-bg mb-1">
       <li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
      <li class="breadcrumb-item active">List Header Banners</li>
    </ol>

 <div class="col-md-12 box box-block bg-white">
<div class="headBanners index large-9 medium-8 columns content">
    <h3><?= __('Head Header Banner') ?></h3>
    <?= $this->Html->link('New Header Banner', ['action' => 'add'], ['class'=>'btn btn-primary mgb-10']) ?>
    <table class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0" style="margin-top:10px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề 1</th>
                <th scope="col">Tiêu đề 2</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Image link</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($headBanners as $headBanner): ?>
            <tr>
                <td><?= $this->Number->format($headBanner->id) ?></td>
                <td><?= h($headBanner->title_st) ?></td>
                <td><?= h($headBanner->title_nd) ?></td>
                <td><?= h($headBanner->start_special_date) ?></td>
                <td><?= h($headBanner->end__special_date) ?></td>
                <td><?= h($headBanner->image) ?></td>
                <td class="actions">
                                  <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $headBanner->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>

                 <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $headBanner->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $headBanner->id), 'escape'=>false]) ?>
    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
