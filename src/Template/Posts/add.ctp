<?php
$this->assign('title', 'Blog Detail');
?>

<h1>
  <?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
  <?= h($post->title); ?>
</h1>


<?= $this->Form->create($post); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body',['rows'=>'3']); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end()?>
