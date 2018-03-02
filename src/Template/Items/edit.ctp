<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="btn-group" role="group">
        <?= $this->Html->link(__('List Items'), ['action' => 'index'],['class'=>'btn btn-default','role'=>'button']) ?>
        <?= $this->Html->link(__('View Item'), ['action' => 'view',$item->id],['class'=>'btn btn-default','role'=>'button']) ?>
</div>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
