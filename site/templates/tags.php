<?php snippet('header') ?>

<ul>
  <?php foreach($page->tags()->split(',') as $tag): ?>
  <li><?php echo $tag ?></li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>