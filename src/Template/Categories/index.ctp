<?php
/**
  * @var \App\View\AppView $this
  */
//form template
$bootstrapTemplate = [
	'inputContainer' =>'{{label}}{{content}}',
	'label' => '<span class="input-group-addon">{{text}}</span>',
	'inputContainerError' => '{{label}}{{content}}{{error}}',
	'error' => '<span class="input-group-addon alert-danger">{{content}}</span>'
];
$this->Form->templates($bootstrapTemplate);
?>
<?php /*
<div class="btn-group" role="group" aria-label="...">
	<?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('New Category'), ['action' => 'add'],['escape' => false, 'class' => 'btn btn-default']) ?>
</div>
*/ ?>
<style type="text/css">
table#categories_table td{
	vertical-align:middle;
}
</style>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <div class="input-group input-group-lg">
        <?php echo $this->Form->control('name',['id'=>'newCategoryInput','label'=>'Add New Category', 'class'=>'form-control','placeholder'=>'Category Name','aria-describedby'=>'sizing-addon1']); ?>
		<span class="input-group-btn">
			<?= $this->Form->button(__('Add'),['class'=>'btn btn-primary']) ?>
		</span>
    </div>    
    <?= $this->Form->end() ?>
</div>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Categories') ?></h3>
    <table id="categories_table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->name) ?></td>
                <td class="actions">
					<div class="btn-group" role="group">
						<?= $this->Html->link(__('View'), ['action' => 'view', $category->id],['class'=>'btn btn-primary btn-sm','role'=>'button']) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id],['class'=>'btn btn-warning btn-sm','role'=>'button']) ?>
						<?= $this->Html->link(__('Add Items'), ['action' => 'add_item', $category->id],['class'=>'btn btn-success btn-sm','role'=>'button']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['class'=>'btn btn-danger btn-sm','role'=>'button','confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
					</div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </nav>
</div>
<?php
$this->start('extra-javascript');
?>
<script type="text/javascript">
$(function(){
	$('#newCategoryInput').focus();
});
</script>
<?php $this->end(); ?>
