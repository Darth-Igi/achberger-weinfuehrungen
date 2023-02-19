<?php
$listOfFilesByPage = Filesystem::listFiles(PATH_UPLOADS_PAGES . $page->uuid() . "\\");

function extractFileName($path)
{
  return (basename($path));
}

$fileNames = array_map('extractFileName', $listOfFilesByPage);
?>

<div class="row">
  <div class="col s12 l6">
    <div class="page-content">
      <?php echo $page->content(); ?>
    </div>
  </div>
  <div class="col s12 l6">
    <?php if($fileNames): ?>
      <div class="slider-container">

        <?php

        $amount = count($fileNames);
        $gal = '
        <style>
          .sliderElements {
            width: ' . ($amount * 100) . '%;
          }
          
          .sliderElements > li {
            width: ' . (100 / $amount) . '%;
          }
        ';
        $styles = '.sliderControls label:hover,';
        $sliderTransition = '';
        $radioInputs = '';
        $imageList = '<ul class="sliderElements">';
        $controlList = '<ul class="sliderControls">';


        foreach ($fileNames as $key => $value) {
          //styles
          if ($amount - 1 > $key) {
            $styles .= '#' . 'slide' . $key . ':checked ~ .sliderControls label[for="' . 'slide' . $key . '"],';
          } else {
            $styles .= '#' . 'slide' . $key . ':checked ~ .sliderControls label[for="' . 'slide' . $key . '"]';
          }
          $sliderTransition .= '#' . 'slide' . ($key + 1) . ':checked ~ .sliderElements {
            left: -' . ($key + 1) . '00%;
          }';

          // radios
          if ($key == 0) {
            $radioInputs .= '<input type="radio" name="' . 'slider" id="' . 'slide' . $key . '" checked="checked">';
          } else {
            $radioInputs .= '<input type="radio" name="' . 'slider" id="' . 'slide' . $key . '">';
          }

          $imageList .= '<li><a href="' . DOMAIN_UPLOADS . "pages/" . $page->uuid() . "/" . $value . '" class="glightbox" data-gallery="gallery1">';

          $imageList .= '<img src="' . DOMAIN_UPLOADS . "pages/" . $page->uuid() . "/thumbnails/" . $value . '" alt="image" >';
          $imageList .= '</a></li>';

          $controlList .= '<li><label for="' . 'slide' . $key . '">' . $key . '</label></li>';

        }


        $styles .= '{
          background: #ddd;
          color: #ddd;
        }' . $sliderTransition;

        $imageList .= '</ul>';
        $controlList .= '</ul>';

        $gal .= $styles . '</style><div class="cssSlider" >';

        $gal .= $radioInputs . $imageList . $controlList . '</div>';

        echo $gal;


        ?>


      </div>
    <?php endif; ?>

    <div>
      <table class="striped">
        <tbody>
        <tr>
          <th>Erlebnisort(e)</th>
          <td><?php echo $page->custom('experiencePlace'); ?></td>
        </tr>
        <tr>
          <th>Termine</th>
          <td><?php echo $page->custom('date'); ?></td>
        </tr>
        <tr>
          <th>Uhrzeit</th>
          <td><?php echo $page->custom('time'); ?></td>
        </tr>
        <tr>
          <th>Dauer</th>
          <td><?php echo $page->custom('duration'); ?></td>
        </tr>
        <tr>
          <th>Kosten</th>
          <td><?php echo $page->custom('costs'); ?></td>
        </tr>
        <tr>
          <th>Teilnehmeranzahl</th>
          <td><?php echo $page->custom('participants'); ?></td>
        </tr>
        <tr>
          <th>Sprache</th>
          <td><?php echo $page->custom('language'); ?></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



