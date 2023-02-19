<?php

$amount = count($dataJson->images);
$gal = '
<style>
  .sliderElements {
    width: '.($amount*100).'%;
  }
  
  .sliderElements > li {
    width: '.(100/$amount).'%;
  }
';
$styles = '.sliderControls label:hover,';
$sliderTransition = '';
$radioInputs = '';
$imageList = '<ul class="sliderElements">';
$controlList = '<ul class="sliderControls">';


foreach ($dataJson->images as $key => $value) {
  //styles
  if($amount-1 > $key) {
    $styles .= '#'.$name.'-slide'.$key.':checked ~ .sliderControls label[for="'.$name.'-slide'.$key.'"],';
  } else {
    $styles .= '#'.$name.'-slide'.$key.':checked ~ .sliderControls label[for="'.$name.'-slide'.$key.'"]';
  }
  $sliderTransition .= '#'.$name.'-slide'.($key+1).':checked ~ .sliderElements {
    left: -'.($key+1).'00%;
  }';

  // radios
  if($key == 0) {
    $radioInputs .= '<input type="radio" name="'.$name.'-slider" id="'.$name.'-slide'.$key.'" checked="checked">';
  } else {
    $radioInputs .= '<input type="radio" name="'.$name.'-slider" id="'.$name.'-slide'.$key.'">';
  }

  $imageList .= '<li><figure>';

  $forthumb = str_replace(DOMAIN.'bl-plugins/monsterGallery/monsterGalleryImages/',PATH_PLUGINS.'/monsterGallery/monsterGalleryImages/',$value);
  $imageList .= '<img src="'.MGthumb($forthumb,$quality).'" alt="'.$dataJson->names[$key].'">';
  $imageList .= '<figcaption>'.$dataJson->descriptions[$key].'</figcaption>';
  $imageList .= '</figure></li>';

  $controlList .= '<li><label for="'.$name.'-slide'.$key.'">'.$key.'</label></li>';

}


$styles .= '{
  background: #ddd;
  color: #ddd;
}'.$sliderTransition;

$imageList .= '</ul>';
$controlList .= '</ul>';

$gal .= $styles.'</style><div class="monsterGallery-grid cssSlider" id="'.$name.'">';

$gal .= $radioInputs.$imageList.$controlList.'</div>';

global $modules;

$modules = 'MediaJs';


 ;?>