<?php
/**
 * @file
 * junior_drupal_published_article_nodes.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function junior_drupal_published_article_nodes_user_default_permissions() {
  $permissions = array();

  // Exported permission: create article_node content.
  $permissions['create article_node content'] = array(
    'name' => 'create article_node content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
