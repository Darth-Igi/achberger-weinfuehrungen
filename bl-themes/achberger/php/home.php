<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header right-align">Herzlich Willkommen!</h1>
      <div class="row right-align">
        <h5 class="header col s12 light">Ihr Gästeführer Wolfgang Achberger</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="<?php echo DOMAIN_THEME_IMG.'background1.jpg'; ?>" alt="Stimmungsbild Blume"></div>
</div>

<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block" data-href="<?php echo DOMAIN_BASE ?>orte-und-kultur">
          <h2 class="center secondary-text"><i class="material-icons">castle</i></h2>
          <h5 class="center">Orte und Kultur</h5>
          <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate
            our custom components. Additionally, <a href="../../../index.php">we refined</a> animations and transitions to provide a smoother
            experience for developers.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block" data-href="<?php echo DOMAIN_BASE ?>aktiv-dabei">
          <h2 class="center secondary-text"><i class="material-icons">directions_walk</i></h2>
          <h5 class="center">Aktiv dabei</h5>
          <p class="light">By utilizing elements and principles of Material Design, we were able to create a
            framework that incorporates components and animations that provide more feedback to users. Additionally,
            a single underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block" data-href="<?php echo DOMAIN_BASE ?>weingenuss">
          <h2 class="center secondary-text"><i class="material-icons">wine_bar</i></h2>
          <h5 class="center">Weingenuss</h5>
          <p class="light">We have provided detailed documentation as well as specific code examples to help new
            users get started. We are also always open to feedback and can answer any questions a user may have
            about Materialize.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row right-align">
        <h5 class="header col s12 light grey-text text-darken-3">Wohlklingender Text um Stimmung zu erzeugen.</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="<?php echo DOMAIN_THEME_IMG.'background2.jpg'; ?>" alt="Stimmungsbild Dynamik"></div>
</div>

<div class="container">

  <div class="section">
    <!-- Plugins Post Begin -->
    <?php Theme::plugins('postBegin') ?>
    <div class="row">
      <div class="col s12 center">
        <h3>Neuigkeiten</h3>
      </div>
    </div>
    <div class="row">
      <?php foreach ($content as $page): ?>
        <?php Theme::plugins('pageBegin'); ?>
        <div class="col s12 l6 left-align">
          <h5><?php echo $page->title() ?></h5>
          <div class="left-align light">
            <?php echo $page->contentBreak(); ?>
          </div>
          <?php if($page->readMore()) { ?>
            <a class="waves-effect btn-flat secondary-text text-accent-4" href="<?php echo $page->permalink() ?>"><?php $L->printMe('Read more') ?></a>
          <?php } ?>
        </div>
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
      <?php endforeach; ?>
    </div>
    <!-- Plugins Post End -->
    <?php Theme::plugins('postEnd') ?>
  </div>

</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">Eine schlaue Weisheit, kann nie schaden. Schon gar nicht hier und jetzt.</h5>
        <span class="light grey-text">Heribert von Besondersschlau</span>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="<?php echo DOMAIN_THEME_IMG.'background3.jpg'; ?>" alt="Stimmungsbild Kraft"></div>
</div>
