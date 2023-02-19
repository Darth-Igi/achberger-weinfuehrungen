  <nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" class="brand-logo" href="<?php echo Theme::siteUrl(); ?>">
        <?php echo $site->title(); ?>
      </a>
      <ul class="right hide-on-med-and-down">
        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage): ?>
          <?php if (!$staticPage->isChild()): ?>
          <li class="nav-item">
            <a class="nav-link"
               href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
          </li>
          <?php endif; ?>
        <?php endforeach ?>

        <!-- RSS -->
        <?php if (Theme::rssUrl()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
              <img class="d-none d-sm-block nav-svg-icon text-primary"
                   src="<?php echo DOMAIN_THEME . 'img/rss.svg' ?>" alt="RSS"/>
              <span class="d-inline d-sm-none">RSS</span>
            </a>
          </li>
        <?php endif; ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage): ?>
          <?php if (!$staticPage->isChild()): ?>
          <li class="nav-item">
            <a class="nav-link"
               href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
          </li>
          <?php endif; ?>
        <?php endforeach ?>

        <!-- RSS -->
        <?php if (Theme::rssUrl()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
              <img class="d-none d-sm-block nav-svg-icon text-primary"
                   src="<?php echo DOMAIN_THEME . 'img/rss.svg' ?>" alt="RSS"/>
              <span class="d-inline d-sm-none">RSS</span>
            </a>
          </li>
        <?php endif; ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
