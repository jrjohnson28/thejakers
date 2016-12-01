<h2>Latest writings</h2>

<ul class="teaser cf">
  <?php foreach(page('writings')->children()->invisible()->limit(3) as $writing): ?>
  <li>
    <h3><a href="<?php echo $writing->url() ?>"><?php echo $writing->title()->html() ?></a></h3>
    <p><?php echo $writing->text()->excerpt(80) ?> <a href="<?php echo $writing->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $writing->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $writing->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $writing->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>