<?php snippet('header') ?>

<section class="content blog">

  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->children()->invisible()->flip() as $poem): ?>

  <article>  
    <a href="<?php echo $poem->url() ?>"><h2 class="poetry"><?php echo $poem->title()->html() ?></h2></a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>