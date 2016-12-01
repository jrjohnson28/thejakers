<?php snippet('header') ?>

<section class="content blog">
 
  <?php echo $page->text()->kirbytext() ?>
    
    <!-- articles -->

  <?php $bloggings = $page->children()->flip()->paginate(10) ?>

  <?php foreach($bloggings as $blog): ?>

  <article>
    <a href="<?php echo $blog->url() ?>"><h2><?php echo $blog->title()->html() ?></h2></a>      
  </article>

  <?php endforeach ?>
    
    
    <!-- pagination -->
    
    <?php if($bloggings->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($bloggings->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $bloggings->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
  <?php endif ?>

  <?php if($bloggings->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $bloggings->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>

</section>

<?php snippet('footer') ?>