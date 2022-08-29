<?php

/**
 * @file
 * Contains \Drupal\formularz\Form\WelcomeForm
 */

namespace Drupal\formularz\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Sets up a welcoming message form. 
 */
class WelcomeForm extends FormBase
{
    /**
     * (@inheritdoc)
     */
    public function getFormId()
    {
        return 'formularz_form';
    }

    /**
     * (@inheritdoc)
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {

        $form['name'] = array(
            '#title' => "Podaj swoje imię:",
            '#type' => 'textfield',
            '#size' => 20,
            '#required' => TRUE,
            '#description' => "np. Jan"
        );

        $form['surname'] = array(
            '#title' => "Podaj swoje nazwisko:",
            '#type' => 'textfield',
            '#size' => 20,
            '#required' => TRUE,
            '#description' => "np. Kowalski"
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => "Prześlij dane"
        );

        return $form;
    }

    /**
     * (@inheritdoc)
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {

        $name = $form_state->getValue('name');
        $surname = $form_state->getValue('surname');

        $showMessage = "Witaj $name $surname";

        $form_state->setRebuild();

        return \Drupal::messenger()->addMessage($showMessage);
    }
}
