<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h2 class="poetry"><?php echo $page->title()->html() ?></h2>
      
<div class="poetry">      
    <?php echo $page->text()->kirbytext() ?>  

    <a href="<?php echo url('poems') ?>">Back…</a>
</div>              
  </article>
</section>

<?php snippet('footer') ?>