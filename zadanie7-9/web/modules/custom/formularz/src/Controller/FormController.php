<?php

/**
 * @file
 * Contains \Drupal\formularz\Controller\FormController
 */

namespace Drupal\formularz\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Generates page using an external form constructor. 
 */
class FormController extends ControllerBase {

	/**
	 * Constructs page with a form. 
	 * 
	 * @return array
	 *   A render array for a page containing form. 
	 */
	public function content() {
		
		echo 'Wpisz odpowiednie dane w poniższych polach';

		$form = \Drupal::formBuilder()->getForm('Drupal\formularz\Form\WelcomeForm');
		
		return $form;
	}
}
