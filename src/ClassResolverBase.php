<?php


namespace Drupal\resolver_decorated_test;


use Drupal\Core\DependencyInjection\ClassResolver;
use Drupal\Core\DependencyInjection\ClassResolverInterface;

abstract class ClassResolverBase extends ClassResolver {

  /**
   * @var \Drupal\Core\DependencyInjection\ClassResolverInterface
   */
  protected $inner;

  public function __construct(ClassResolverInterface $inner) {
    $this->inner = $inner;
  }


}