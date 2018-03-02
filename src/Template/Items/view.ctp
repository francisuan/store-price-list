<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="btn-group" role="group">
   <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id],['class'=>'btn btn-primary','role'=>'button']) ?>
   <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['class'=>'btn btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
   <?= $this->Html->link(__('List Items'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
   <?= $this->Html->link(__('New Item'), ['action' => 'add'],['class'=>'btn btn-success','role'=>'button']) ?>
</div>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $item->has('category') ? $this->Html->link($item->category->name, ['controller' => 'Categories', 'action' => 'view', $item->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($item->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Price History') ?></h4>
        <?php if (!empty($item->price)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->price as $price): ?>
            <tr>
                <td><?= h($price->id) ?></td>
                <td><?= h($price->item_id) ?></td>
                <td><?= h($price->price) ?></td>
                <td><?= h($price->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Price', 'action' => 'view', $price->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Price', 'action' => 'edit', $price->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Price', 'action' => 'delete', $price->id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
