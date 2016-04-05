<?php

/**
 * @file
 * Contains \Drupal\commerce_option\Entity\CommerceOption.
 */

namespace Drupal\commerce_option\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Commerce Option entities.
 */
class CommerceOptionViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['commerce_option']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Commerce Option'),
      'help' => $this->t('The Commerce Option ID.'),
    );

    return $data;
  }

}
