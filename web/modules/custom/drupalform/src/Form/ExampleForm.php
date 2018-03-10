<?php

namespace Drupal\drupalform\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends ConfigFormBase {

    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */
    public function getFormId()
    {
        return 'drupalform_example_form';
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
            '#default_value' => $this->config('drupalform.settings')->get('cat_name'),
        ];
        /*
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
        */
        /*
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('OK'),
        ];
        */

        // return $form;
        return parent::buildForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        if (!$form_state->isValueEmpty('cat_name')) {
            if ($form_state->getValue('cat_name') == "tiger") {
                $form_state->setErrorByName('cat_name', t('Tiger is my cat. Pick another name.'));
            }
        }
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
        parent::submitForm($form, $form_state);
        $this->config('drupalform.settings')->set('cat_name', $form_state->getValue('cat_name'));
    }

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames() {
        return ['drupalform.settings'];
    }
}