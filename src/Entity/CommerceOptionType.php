<?php

/**
 * @file
 * Contains \Drupal\commerce_option\Entity\CommerceOptionType.
 */

namespace Drupal\commerce_option\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\commerce_option\CommerceOptionTypeInterface;

/**
 * Defines the Commerce Option type entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_option_set",
 *   label = @Translation("Commerce Option type"),
 *   handlers = {
 *     "list_builder" = "Drupal\commerce_option\CommerceOptionTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\commerce_option\Form\CommerceOptionTypeForm",
 *       "edit" = "Drupal\commerce_option\Form\CommerceOptionTypeForm",
 *       "delete" = "Drupal\commerce_option\Form\CommerceOptionTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\commerce_option\CommerceOptionTypeHtmlRouteProvider",
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
class CommerceOptionType extends ConfigEntityBundleBase implements CommerceOptionTypeInterface {
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
