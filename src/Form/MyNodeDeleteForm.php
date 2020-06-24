<?php


namespace Drupal\resolver_decorated_test\Form;


use Drupal\node\Form\NodeDeleteForm;

class MyNodeDeleteForm extends NodeDeleteForm {

  protected function getDeletionMessage() {
    return parent::getDeletionMessage() . "🔥🔥🔥🔥🔥🔥🔥🔥🔥";
  }


}