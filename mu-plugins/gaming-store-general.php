<?php
/**
 * Plugin Name: Gaming Store General
 * Description: Core for Gaming Store
 * Version: 1.0.0
 * Author: Gaming Store
 * Aurhor URI: https://gamingstore.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function gaming_store_remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
    unset($wp_meta_boxes['dashboard']['normal']['high']['rand_math_dashboard_widget']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action('wp_dashboard_setup', 'gaming_store_remove_dashboard_widgets');