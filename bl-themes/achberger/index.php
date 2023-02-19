<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="generator" content="Media-JS">

	<!-- Dynamic title tag -->
	<?php echo Theme::metaTagTitle(); ?>

	<!-- Dynamic description tag -->
	<?php echo Theme::metaTagDescription(); ?>

	<!-- Include Favicon -->
	<?php echo Theme::favicon('img/favicon.png'); ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('css/main.css'); ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('css/glightbox.min.css'); ?>

	<!-- Load Bludit Plugins: Site head -->
	<?php Theme::plugins('siteHead'); ?>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

  <div class="content">
    <!-- Content -->
    <?php
      // $WHERE_AM_I variable detect where the user is browsing
      // If the user is watching a particular page the variable takes the value "page"
      // If the user is watching the frontpage the variable takes the value "home"
      if ($WHERE_AM_I == 'page') {
        include(THEME_DIR_PHP.'page.php');
      } else {
        include(THEME_DIR_PHP.'home.php');
      }
    ?>
  </div>

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>

  <!-- Include Jquery file from Bludit Core -->
  <?php echo Theme::jquery(); ?>

  <?php echo Theme::js('js/materialize.min.js') ?>
  <?php echo Theme::js('js/glightbox.min.js') ?>
  <?php echo Theme::js('js/init.js') ?>

</body>
</html>