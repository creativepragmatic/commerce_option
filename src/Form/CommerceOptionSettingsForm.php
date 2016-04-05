<?php

/**
 * @file
 * Contains \Drupal\commerce_option\Form\CommerceOptionSettingsForm.
 */

namespace Drupal\commerce_option\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CommerceOptionSettingsForm.
 *
 * @package Drupal\commerce_option\Form
 *
 * @ingroup commerce_option
 */
class CommerceOptionSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'CommerceOption_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Defines the settings form for Commerce Option entities.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form definition array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['CommerceOption_settings']['#markup'] = 'Settings form for Commerce Option entities. Manage field settings here.';
    return $form;
  }

}
