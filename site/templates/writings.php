<?php snippet('header') ?>

<section class="content blog">

  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->children()->invisible()->flip() as $writing): ?>

  <article>  
    <a href="<?php echo $writing->url() ?>"><h2 class="article"><?php echo $writing->title()->html() ?></h2></a>
  </article>

  <?php endforeach ?>
    

</section>

<?php snippet('footer') ?>