<?php
$this->assign('title','Add '.$category->name.' items');
//form template
$bootstrapTemplate = [
	'inputContainer' =>'{{label}}{{content}}',
	'label' => '<span class="input-group-addon">{{text}}</span>',
	'inputContainerError' => '{{label}}{{content}}{{error}}',
	'error' => '<span class="input-group-addon alert-danger">{{content}}</span>'
];
$this->Form->templates($bootstrapTemplate);
?>
<div class="btn-group" role="group">
	<?= $this->Html->link(__('List Categories'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
	<?= $this->Html->link(__('View').' '.$category->name, ['action' => 'view',$category->id],['class'=>'btn btn-primary','role'=>'button']) ?>
	<?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id],['class'=>'btn btn-success','role'=>'button']) ?>	
</div>
<div class="categories add_item large-9 medium-8 columns content">
    <h3>Add <?= h($category->name) ?></h3>
	<?= $this->Form->create($item) ?>
	<div class="input-group input-group-lg">
		<?php echo $this->Form->control('name',['id'=>'itemName','label'=>'Name', 'class'=>'form-control','placeholder'=>'','aria-describedby'=>'sizing-addon1']); ?>
		<?php echo $this->Form->control('Price.price',['label'=>'Price', 'class'=>'form-control','placeholder'=>'','aria-describedby'=>'sizing-addon1']); ?>
	</div>
	<div style="margin-top:15px;">
		<?= $this->Form->button(__('Add'),['class'=>'btn btn-primary']) ?>
	</div>
	 <?= $this->Form->end() ?>
</div>
<?php
$this->start('extra-javascript');
?>
<script type="text/javascript">
$(function(){
	$('#itemName').focus();
});
</script>
<?php
$this->end();
?>