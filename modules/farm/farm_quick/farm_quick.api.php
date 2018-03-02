<?php

/**
 * @file
 * Hooks provided by farm_quick.
 *
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * @defgroup farm_quick Farm quick module integrations.
 *
 * Module integrations with the farm_quick module.
 */

/**
 * @defgroup farm_quick_hooks Farm quick's hooks
 * @{
 * Hooks that can be implemented by other modules in order to extend farm_quick.
 */

/**
 * Define quick forms provided by this module
 */
function hook_farm_quick_forms() {
  return array(
    'myform' => array(
      'tab' => t('My form'),
      'permission' => 'create farm_harvest log entities',
      'form' => 'my_quick_form',
    ),
  );
}

/**
 * @}
 */
