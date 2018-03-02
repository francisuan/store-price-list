<?php
/**
  * @var \App\View\AppView $this
  */
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
        <?= $this->Html->link(__('View Item'), ['action' => 'view',$item->id],['class'=>'btn btn-default','role'=>'button']) ?>
</div>
<div class="items form large-9 medium-8 columns content">
    <h1><small>Edit</small> <?= $item->name ?></h1>
    <?= $this->Form->create($item) ?>
    <div class="input-group input-group-lg">
        <?php
            echo $this->Form->control('category_id', ['options' => $categories,'class'=>'form-control','aria-describedby'=>'sizing-addon1']);
            echo $this->Form->control('name',['class'=>'form-control','aria-describedby'=>'sizing-addon1']);
            echo $this->Form->control('Price.price',['value'=>$item->price[0]->price,'class'=>'form-control','aria-describedby'=>'sizing-addon1','type'=>'number','step'=>'.01']);
        ?>
    </div>
    <div style="margin-top:15px;">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
