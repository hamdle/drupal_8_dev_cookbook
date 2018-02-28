<?php

namespace Drupal\drupalform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {

    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */
    public function getFormId()
    {
        // TODO: Implement getFormId() method.
    }

    /**
     * Form constructor.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     *
     * @return array
     *   The form structure.
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['cat_name'] = [
            '#type' => 'textfield',
            '#title' => 'Cat Name',
        ];

        $form['phone'] = [
            '#type' => 'tel',
            '#title' => $this->t('Phone'),
        ];
        $form['email'] = [
            '#type' => 'email',
            '#title' => $this->t('Email'),
        ];
        $form['integer'] = [
            '#type' => 'number',
            '#title' => $this->t('Integer Value 1 - 10'),
            '#step' => 1,
            '#min' => 0,
            '#max' => 10,
        ];
        $form['date'] = [
            '#type' => 'date',
            '#title' => $this->t('Date'),
            '#date_date_format' => 'Y-m-d',
        ];
        $form['search'] = [
            '#type' => 'search',
            '#title' => $this->t('Search'),
            '#autocomplete_route_name' => FALSE,
        ];
        $form['range'] = [
            '#type' => 'range',
            '#title' => $this->t('Range 0 - 99'),
            '#min' => 0,
            '#max' => 99,
            '#step' => 1,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('OK'),
        ];

        return $form;
    }

    /**
     * Form submission handler.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // TODO: Implement submitForm() method.
    }
}