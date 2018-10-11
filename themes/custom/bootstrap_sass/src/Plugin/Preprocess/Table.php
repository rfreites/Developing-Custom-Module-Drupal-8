<?php

namespace Drupal\bootstrap_sass\Plugin\Preprocess;
use Drupal\bootstrap\Plugin\Preprocess\Table as PreprocessTable;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "table" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("table")
 */
class Table extends PreprocessTable {
  /**
   * {@inheritdoc}
   */
  public function preprocess(array &$variables, $hook, array $info) {
    
    $variables['table_ad_title'] = 'This is an example of preprocess';

    // If you are extending and overriding a preprocess method from the base
    // theme, it is imperative that you also call the parent (base theme) method
    // at some point in the process, typically after you have finished with your
    // preprocessing.
    parent::preprocess($variables, $hook, $info);
  }
}
