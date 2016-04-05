<?php

/**
 * @file
 * Contains \Drupal\commerce_option\CommerceOptionInterface.
 */

namespace Drupal\commerce_option;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Commerce Option entities.
 *
 * @ingroup commerce_option
 */
interface CommerceOptionInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Commerce Option type.
   *
   * @return string
   *   The Commerce Option type.
   */
  public function getType();

  /**
   * Gets the Commerce Option name.
   *
   * @return string
   *   Name of the Commerce Option.
   */
  public function getName();

  /**
   * Sets the Commerce Option name.
   *
   * @param string $name
   *   The Commerce Option name.
   *
   * @return \Drupal\commerce_option\CommerceOptionInterface
   *   The called Commerce Option entity.
   */
  public function setName($name);

  /**
   * Gets the Commerce Option creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Commerce Option.
   */
  public function getCreatedTime();

  /**
   * Sets the Commerce Option creation timestamp.
   *
   * @param int $timestamp
   *   The Commerce Option creation timestamp.
   *
   * @return \Drupal\commerce_option\CommerceOptionInterface
   *   The called Commerce Option entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Commerce Option published status indicator.
   *
   * Unpublished Commerce Option are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Commerce Option is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Commerce Option.
   *
   * @param bool $published
   *   TRUE to set this Commerce Option to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\commerce_option\CommerceOptionInterface
   *   The called Commerce Option entity.
   */
  public function setPublished($published);

}
