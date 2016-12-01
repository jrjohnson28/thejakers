<?php snippet('header') ?>

 <h1><?php echo $page->title()->html() ?></h1>

<div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

<form>
  <input type="search" name="q" value="<?php echo esc($query) ?>" placeholder="Type what you're looking for here and hit enter..."></form>


<section class="content blog">

<article>
  <?php foreach($results as $result): ?>
    <a href="<?php echo $result->url() ?>"><h3>
      <?php echo $result->title()->html() ?></h3>
    </a>
 
  <?php endforeach ?>

</article>
</section>

<?php snippet('footer') ?>
 