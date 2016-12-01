<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
      

    <hr>

     <?php foreach($page->children()->invisible()->flip() as $project): ?>

  <article>  
    <a href="<?php echo $project->url() ?>"><h2><?php echo $project->title()->html() ?></h2></a>
  </article>

  <?php endforeach ?>

  </main>

<?php snippet('footer') ?>