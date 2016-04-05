<?php

/**
 * @file
 * Contains commerce_option.page.inc.
 *
 * Page callback for Commerce Option entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Commerce Option templates.
 *
 * Default template: commerce_option.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_commerce_option(array &$variables) {
  // Fetch CommerceOption Entity Object.
  $commerce_option = $variables['elements']['#commerce_option'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}

/**
* Prepares variables for a custom entity type creation list templates.
*
* Default template: commerce_option-content-add-list.html.twig.
*
* @param array $variables
*   An associative array containing:
*   - content: An array of commerce_option-types.
*
* @see block_content_add_page()
*/
function template_preprocess_commerce_option_content_add_list(&$variables) {
  $variables['types'] = array();
  $query = \Drupal::request()->query->all();
  foreach ($variables['content'] as $type) {
    $variables['types'][$type->id()] = array(
      'link' => Link::fromTextAndUrl(
        $type->label(), 
        new Url('entity.commerce_option.add_form',
          array(
            'commerce_option_set' => $type->id()
          ),
          array('query' => $query)
        )
      ),
      'description' => array(
        '#markup' => $type->label(),
      ),
      'title' => $type->label(),
      'localized_options' => array(
        'query' => $query,
      ),
    );
  }
}
