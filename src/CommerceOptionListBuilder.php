<?php

/**
 * @file
 * Contains \Drupal\commerce_option\CommerceOptionListBuilder.
 */

namespace Drupal\commerce_option;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Commerce Option entities.
 *
 * @ingroup commerce_option
 */
class CommerceOptionListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Commerce Option ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\commerce_option\Entity\CommerceOption */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.commerce_option.edit_form', array(
          'commerce_option' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
