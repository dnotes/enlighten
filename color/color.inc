<?php

$info = array(

  'schemes' => array(
	// base, link, gradation(top), gradation(bottom), text
    '#ba5511,#ba4308,#8f6d0f,#edb742,#252525' => "Rustic (default)",

  ),

  'copy' => array(
    'images/nav-l.png',
    'images/nav-r.png',
    'images/nav-c.png',
    'images/tabs-l.png',
    'images/tabs-r.png',
    'images/tabs-c.png',
    'images/block-l.png',
    'images/block-r.png',
  ),

  'css' => array(
    'css/enlighten-style.css',
    'css/enlighten-style-rtl.css',
    'css/local.css',
    'css/local-rtl.css'
  ),

  'gradient' => array(0,0,960,148),

  'fill' => array(
    'base' => array(0,150,960,570),
  ),

  'slices' => array(
    'images/header-bg.png' => array(9,0,8,148),
    'images/block-color.png' => array(641,194,6,99),
    'images/footer-bg-color.png' => array(9,632,6,87),
    'images/header-shadow.png' => array(9,149,5,22),
    'images/footer-shadow.png' => array(9,610,5,22),
  ),
  
  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files
  'preview_image' => 'color/preview.png',
  'preview_css' => 'color/preview.css',

  // Base file for image generation
  'base_image' => 'color/base.png',

);