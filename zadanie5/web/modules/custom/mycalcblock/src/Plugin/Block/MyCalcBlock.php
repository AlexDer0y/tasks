<?php

namespace Drupal\mycalcblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityStorageInterface;


/**
 * Provides a calculations block for test_content content type.
 * @Block (
 * id = "mycalcblock",
 * admin_label = "test_content calculation block",
 * category = "custom blocks",
 * )
 */

class MyCalcBlock extends BlockBase
{

    /**
     * (@inheritdoc)
     */
    public function addFieldValues()
    {
        $node = \Drupal::routeMatch()->getParameter('node');
        
        if ($node instanceof \Drupal\node\NodeInterface) {
            $nodeType = $node->bundle();

            // Getting field values in two different ways
            $field_min = $node->field_min->value;
            $field_max = $node->get('field_max')->getString();
            
            // Adding field values
            $addResult = $field_min + $field_max;

            // Returning addition result for 'test_content' content type
            if ($nodeType == 'test_content') {
                $showMessage = "Typ tego contentu to $nodeType. <br>Wynik dodawania $field_min + $field_max = $addResult .";
            } else {
                $showMessage = "Typ tego contentu to $nodeType - kalkulacja nie wymagana.";
            }
        }
        return $showMessage;
    }

    /**
     * (@inheritdoc)
     */
    public function build()
    {
        
        return
            [
                '#markup' => $this->addFieldValues(),
            ];
    }
}
