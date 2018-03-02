<?php
/**
  * @var \App\View\AppView $this
  */
  $bootstrapTemplate = [
	'inputContainer' =>'{{content}}'
];
$this->Form->templates($bootstrapTemplate);
?>
<div class="btn-group" role="group">
	<?= $this->Html->link(__('List Categories'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
	<?= $this->Html->link(__('View').' '.$category->name, ['action' => 'view',$category->id],['class'=>'btn btn-primary','role'=>'button']) ?>
</div>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1"><?= __('Edit Category') ?></span>
		<?php echo $this->Form->control('name',['label'=>false,'class'=>'form-control','aria-describedby'=>'sizing-addon1']); ?>
		<span class="input-group-btn">
			<?= $this->Form->button(__('Save'),['class'=>'btn btn-primary']) ?>
		</span>
    </div>
    <?= $this->Form->end() ?>
</div>
