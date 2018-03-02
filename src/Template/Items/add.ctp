<?php
$this->assign('title','Add item');
$bootstrapTemplate = [
	'inputContainer' =>'{{label}}{{content}}',
	'label' => '<span class="input-group-addon">{{text}}</span>',
	'inputContainerError' => '{{label}}{{content}}{{error}}',
	'error' => '<span class="input-group-addon alert-danger">{{content}}</span>'
];
$this->Form->templates($bootstrapTemplate);
?>
<div class="btn-group" role="group">
	<?= $this->Html->link(__('List Items'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
</div>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <div class="input-group input-group-lg">
        <?php
            echo $this->Form->control('category_id', ['options' => $categories,'class'=>'form-control','aria-describedby'=>'sizing-addon1']);
            echo $this->Form->control('name',['class'=>'form-control','aria-describedby'=>'sizing-addon1']);
            echo $this->Form->control('Price.price',['class'=>'form-control','aria-describedby'=>'sizing-addon1']);
        ?>
    </div>
	<div style="margin-top:15px;">
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
	</div>
    <?= $this->Form->end() ?>
</div>
