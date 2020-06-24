<?php


namespace Drupal\resolver_decorated_test;


use Drupal\block\Form\BlockDeleteForm;
use Drupal\resolver_decorated_test\Form\MyBlockDeleteForm;

/**
 * Create a decorating ClassResolver to replace 1 class.
 */
class ClassResolverOne extends ClassResolverBase {

  public function getInstanceFromDefinition($definition) {
    if ($definition === BlockDeleteForm::class) {
      $definition = MyBlockDeleteForm::class;
    }
    return $this->inner->getInstanceFromDefinition($definition);
  }


}