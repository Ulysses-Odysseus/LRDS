<?php
//REMOVE WORDPRESS VERSION IN THE HEADER
remove_action('wp_head', 'wp_generator');

//REMOVE WINDOWS LIVE WRITER CRAP
remove_action('wp_head', 'wlwmanifest_link');

//REMOVE RSS FEED LINKS
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

//CLEAN UP THE DASHBOARD AND REMOVES THE WORDPRESS STUFF.
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
} 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );