<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="btn-group" role="group">
	<?= $this->Html->link(__('List Categories'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
	<?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id],['class'=>'btn btn-primary','role'=>'button']) ?>		
	<?= $this->Html->link(__('Add Item'), ['action' => 'add_item', $category->id],['class'=>'btn btn-success','role'=>'button']) ?>		
	<?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['class'=>'btn btn-danger','role'=>'button','confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
</div>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= $category->name.' '.__('Products') ?></h4>
        <?php if (!empty($category->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
					<div class="btn-group" role="group">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
					</div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
