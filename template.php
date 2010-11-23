<?php
// $Id$

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function enlighten_preprocess_page(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
  if ((arg(0) == 'node' && arg(2) == 'edit') || (arg(0) == 'node' && arg(1) == 'add')) {
    $vars['body_classes'] .= ' node-edit';
  }
}
