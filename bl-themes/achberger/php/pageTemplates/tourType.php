<?php $children = $page->children(); ?>
<div class="row">
  <?php foreach ($children as $child) : ?>
    <?php Theme::plugins('pageBegin'); ?>
    <div class="col s12 m4">
      <div class="card" data-href="<?php echo $child->permalink() ?>">
        <div class="card-image">
          <img src="<?php echo $child->coverImage(); ?>">
        </div>
        <div class="card-content">
          <span class="card-title"><?php echo $child->title(); ?></span>
          <p><?php echo $child->contentBreak(); ?></p>
        </div>
        <div class="card-action">
          <a class="waves-effect secondary-text btn-flat" href="<?php echo $child->permalink() ?>">Zur Führung</a>
        </div>
      </div>
    </div>
    <?php Theme::plugins('pageEnd'); ?>
  <?php endforeach; ?>
</div>
