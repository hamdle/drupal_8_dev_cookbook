<?php

namespace Drupal\realname\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @FieldWidget(
 *   id = "realname_default",
 *   label = @Translation("Real nom"),
 *   field_types = {
 *     "realname"
 *   }
 * )
 */
class RealNameDefaultWidget extends WidgetBase {
    /**
     * {@inheritdoc}
     */
    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state)
    {
        $element['first_name'] = [
            '#type' => 'textfield',
            '#title' => t('First Nom'),
            '#default_value' => '',
            '#size' => 25,
            '#required' => $element['#required'],
        ];
        $element['last_name'] = [
            '#type' => 'textfield',
            '#title' => t('Second Nom'),
            '#default_value' => '',
            '#size' => 25,
            '#required' => $element['#required'],
        ];

        return $element;
    }
}