<?php


namespace Drupal\resolver_decorated_test\Form;


use Drupal\block\Form\BlockDeleteForm;

class MyBlockDeleteForm extends BlockDeleteForm {

  public function getQuestion() {
    return parent::getQuestion() . $this->t('Like Really?');
  }


}