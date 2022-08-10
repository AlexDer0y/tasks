<?php

/**
 * @file
 * Contains \Drupal\formularz\Form\Formularz
 */

namespace Drupal\formularz\Form;

// use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
// use Drupal\Core\Render\Element\Hidden;

/**
 * Setting up a form for 'hello message'   
 */
class Formularz extends FormBase
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
        // $node = \Drupal::routeMatch()->getParameter('node');
        // $nid = $node->nid->value;

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
    public function submitForm(array &$form, FormStateInterface $form_state)
    {

        $name = $form_state->getValue('name');
        $surname = $form_state->getValue('surname');

        $showMessage = "Witaj $name $surname";

        $form_state->setRebuild();

        return \Drupal::messenger()->addMessage($showMessage);
    }
}
