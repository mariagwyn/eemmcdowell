<?php

/**
 * @file
 * Contains Drupal\df_admin\Controller\DFAdminController.
 */

namespace Drupal\df_admin\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\df_admin\Controller
 */
class DFAdminController extends ControllerBase {
  /**
   * DF Admin.
   *
   * @return string
   *   Return admin page.
   */
  public function admin_page() {
    return [
        '#type' => 'markup',
        '#markup' => ''
    ];
  }

}
