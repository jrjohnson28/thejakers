<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <p><?php echo $page->date('d-m-Y') ?></p>
    <h2><?php echo $page->title()->html() ?></h2>
    <p>by <?php echo $page->author() ?>,&nbsp; filed under: <?php echo $page->tags() ?></p>
<div class="main">     
    <?php echo $page->text()->kirbytext() ?>  

    <a href="<?php echo url('bloggings') ?>">Back…</a>
</div> 
  </article>
</section>

<?php snippet('footer') ?>