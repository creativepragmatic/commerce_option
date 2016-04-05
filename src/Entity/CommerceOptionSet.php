<?php

/**
 * @file
 * Contains \Drupal\commerce_option\Entity\CommerceOptionSet.
 */

namespace Drupal\commerce_option\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\commerce_option\CommerceOptionSetInterface;

/**
 * Defines the Commerce Option type entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_option_set",
 *   label = @Translation("Commerce Option type"),
 *   handlers = {
 *     "list_builder" = "Drupal\commerce_option\CommerceOptionSetListBuilder",
 *     "form" = {
 *       "add" = "Drupal\commerce_option\Form\CommerceOptionSetForm",
 *       "edit" = "Drupal\commerce_option\Form\CommerceOptionSetForm",
 *       "delete" = "Drupal\commerce_option\Form\CommerceOptionSetDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\commerce_option\CommerceOptionSetHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_option_set",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "commerce_option",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/commerce_option_set/{commerce_option_set}",
 *     "add-form" = "/admin/structure/commerce_option_set/add",
 *     "edit-form" = "/admin/structure/commerce_option_set/{commerce_option_set}/edit",
 *     "delete-form" = "/admin/structure/commerce_option_set/{commerce_option_set}/delete",
 *     "collection" = "/admin/structure/commerce_option_set"
 *   }
 * )
 */
class CommerceOptionSet extends ConfigEntityBundleBase implements CommerceOptionSetInterface {
  /**
   * The Commerce Option type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Commerce Option type label.
   *
   * @var string
   */
  protected $label;

}
