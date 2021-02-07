<?php

namespace Drupal\tm_landing_page\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * The Landing Page Controller.
 *   Use the current language of a site to decide which node to go
 */
class TmLandingPageController extends ControllerBase {

  public function redirectToNode() {

    $logged_in = \Drupal::currentUser()->isAuthenticated();

    $current_language = \Drupal::languageManager()->getCurrentLanguage();
    
    $route_name = 'entity.node.canonical';

    $content = [
      'es' => 24,
      'en' => 25,
    ];

    if ($logged_in) {
       //Change content array for 
       // logged in users
       //$content['es'] = 102
       //$content['en'] = 100
    }
    


    if ($current_language->getId()) {

      switch($current_language->getId()) {

        case 'es':
        
          $route_parameters = [
           'node' => $content['es'],
          ];

          break;

        default:

          $route_parameters = [
            'node' => $content['en'],
          ];

          break;

      }

    }

    return $this->redirect($route_name, $route_parameters);

  }

}
