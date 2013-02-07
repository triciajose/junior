<?php
/**
 * @file
 * junior_drupal_published_article_nodes.features.inc
 */

/**
 * Implements hook_views_api().
 */
function junior_drupal_published_article_nodes_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function junior_drupal_published_article_nodes_node_info() {
  $items = array(
    'article_node' => array(
      'name' => t('Article Node'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
