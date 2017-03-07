<?php
$this->assign('title', 'Blog Posts');
?>

<h1>Blog Posts</h1>

<?= $this->Html->link('Add New', ['action'=>'add']); ?>

<ul>
  <?php foreach ($posts as $post) : ?>
    <li>
      <!-- <?= $this->Html->link($post->title, ['controller'=>'Posts', 'action'=>'view', $post->id]); ?> -->
      <!-- <?= $this->Html->link($post->title, ['action'=>'view', $post->id]); ?> -->
      <a href="<?= $this->Url->build(['action'=>'view', $post->id]); ?>">
        <?= h($post->title); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
