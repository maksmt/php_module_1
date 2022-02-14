<?php
namespace Drupal\maksim\Controller;

use Drupal\Core\Controller\ControllerBase;

class maksimController extends ControllerBase{
     /**
   * @return array
   */
  public function myPage() {
    $element = array(
      '#markup' => 'Hello! You can add here a photo of your cat.',
    );
    return $element;
  }
}