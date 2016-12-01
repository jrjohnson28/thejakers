<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h2 class="article"><?php echo $page->title()->html() ?></h2>
      
<div class="article">      
    <?php echo $page->text()->kirbytext() ?>  

    <a href="<?php echo url('writings') ?>">Back…</a>
</div>              
  </article>
</section>

<?php snippet('footer') ?>