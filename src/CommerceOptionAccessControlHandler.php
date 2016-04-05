<?php

/**
 * @file
 * Contains \Drupal\commerce_option\CommerceOptionAccessControlHandler.
 */

namespace Drupal\commerce_option;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Commerce Option entity.
 *
 * @see \Drupal\commerce_option\Entity\CommerceOption.
 */
class CommerceOptionAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\commerce_option\CommerceOptionInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished commerce option entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published commerce option entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit commerce option entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete commerce option entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add commerce option entities');
  }

}
