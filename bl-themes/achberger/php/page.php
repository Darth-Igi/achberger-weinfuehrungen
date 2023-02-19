<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">

        <!-- Page title -->
        <h1 class="title"><?php echo $page->title(); ?></h1>

        <!-- Page description -->
        <?php if ($page->description()): ?>
          <p class="page-description"><?php echo $page->description(); ?></p>
        <?php endif ?>

        <!-- Page cover image -->
        <?php if ($page->coverImage()): ?>
          <div class="row"
               style="
                   --aspect-ratio:21/9;
                   background-image: url('<?php echo $page->coverImage(); ?>');
                   background-size: cover;
                   background-position: center;">
            <div></div>
          </div>
        <?php endif ?>

        <?php
        switch ($page->category()) {
          case 'Tour':
          {
            include(THEME_DIR_PHP . 'pageTemplates/tour.php');
            break;
          }
          case 'TourType':
          {
            include(THEME_DIR_PHP . 'pageTemplates/tourType.php');
            break;
          }
          default:
          {
            include(THEME_DIR_PHP . 'pageTemplates/default.php');
          }
        }
        ?>

        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
      </div>
    </div>
  </div>
</section>
