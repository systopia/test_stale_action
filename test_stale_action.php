<?php

require_once 'test_stale_action.civix.php';

use CRM_TestStaleAction_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function test_stale_action_civicrm_config(&$config): void {
  _test_stale_action_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function test_stale_action_civicrm_install(): void {
  _test_stale_action_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function test_stale_action_civicrm_enable(): void {
  _test_stale_action_civix_civicrm_enable();
}
