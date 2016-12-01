<h2>Latest poems</h2>

<ul class="teaser cf">
  <?php foreach(page('poems')->children()->invisible()->limit(3) as $poem): ?>
  <li>
    <h3><a href="<?php echo $poem->url() ?>"><?php echo $poem->title()->html() ?></a></h3>
    <p><?php echo $poem->text()->excerpt(80) ?> <a href="<?php echo $poem->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $poem->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $poem->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $poem->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>