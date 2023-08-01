<?php declare(strict_types = 1);

namespace Drupal\task_three\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for task three routes.
 */
final class TaskThreeController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function content() {

    $form = $this->formBuilder->getForm('Drupal\task_three\Form\TaskThreeForm');
        return [
          '#type' => 'markup',
          '#markup' => $form
        ];
  }

}
