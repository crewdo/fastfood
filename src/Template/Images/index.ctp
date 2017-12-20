<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>
      <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <h4>Images list</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                            <li class="breadcrumb-item active">Images</li>
                        </ol>
                        <div class="box box-block bg-white">
                            <h5 class="mb-1"><?= $this->Html->link(__('New image'), ['action' => 'add'],
                         array('class'=>'btn btn-info w-min-sm mb-0-25 waves-effect waves-light','id'=>'', 'escape' => false))?></h5>
                     
                            <table class="table table-striped table-bordered dataTable" id="table_1">
                                <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Link</th>
                        <th scope="col">Created</th>
                        <th scope="col">Modified</th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                                </thead>
                                  <tbody>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?= $this->Number->format($image->id) ?></td>
                <td><?= h($image->link) ?></td>
                <td><?= h($image->created) ?></td>
                <td><?= h($image->modified) ?></td>
                <td class="actions" style="width: 70px;">
                 <!--      <a href=""><i class="fa fa-pencil edit-icon"></i></a>
                         <a href=""><i class="fa fa-trash delete-icon"></i></a> -->
                 <?= $this->Html->link(
                            $this->Html->tag('i','&nbsp',array('class'=>'fa fa-pencil edit-icon')),
                             array('controller'=>'Images', 'action'=>'edit'),
                             array('class'=>'','id'=>'', 'escape' => false)
                            ) ?>
                     <?= $this->Form->postLink(
                     $this->Html->tag('i', '', array('class' => 'fa fa-trash delete-icon')), 
                     ['action' => 'delete', $image->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'escape'=>false]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo  WWW_ROOT . 'img' .DS?>
