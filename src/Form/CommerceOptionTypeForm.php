<?php

/**
 * @file
 * Contains \Drupal\commerce_option\Form\CommerceOptionTypeForm.
 */

namespace Drupal\commerce_option\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CommerceOptionTypeForm.
 *
 * @package Drupal\commerce_option\Form
 */
class CommerceOptionTypeForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $commerce_option_type = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $commerce_option_type->label(),
      '#description' => $this->t("Label for the Commerce Option type."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $commerce_option_type->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\commerce_option\Entity\CommerceOptionType::load',
      ),
      '#disabled' => !$commerce_option_type->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $commerce_option_type = $this->entity;
    $status = $commerce_option_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Commerce Option type.', [
          '%label' => $commerce_option_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Commerce Option type.', [
          '%label' => $commerce_option_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($commerce_option_type->urlInfo('collection'));
  }

}
