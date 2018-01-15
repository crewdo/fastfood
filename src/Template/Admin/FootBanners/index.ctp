<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FootBanner[]|\Cake\Collection\CollectionInterface $footBanners
 */
?>
<div class="content-area py-1">
    <div class="container-fluid">
    <ol class="breadcrumb no-bg mb-1">
       <li class="breadcrumb-item"><?= $this->Html->link(__('Home'), '/admin/') ?></li>
      <li class="breadcrumb-item active">List Footer Banners</li>
    </ol>

 <div class="col-md-12 box box-block bg-white">
<div class="footBanners index large-9 medium-8 columns content">
    <h3><?= __('Foot Banners') ?></h3>
       <?= $this->Html->link('New Foot Banner', ['action' => 'add'], ['class'=>'btn btn-primary mgb-10']) ?>
    <table class="table table-striped table-bordered dataTable vertical-table" id="table_1" cellpadding="0" cellspacing="0" style="margin-top:10px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image link</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footBanners as $footBanner): ?>
            <tr>
                <td><?= $this->Number->format($footBanner->id) ?></td>
                <td><?= $this->Number->format($footBanner->image) ?></td>
                <td><?= h($footBanner->title) ?></td>
                <td><?= h($footBanner->content) ?></td>
                <td class="actions">
                                        <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'ti-pencil edit-icon')),
                             array('action'=>'edit', $footBanner->id),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>

                 <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'ti-trash delete-icon')), 
                     ['action' => 'delete', $footBanner->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $footBanner->id), 'escape'=>false]) ?>
    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>
</div>
</div>
