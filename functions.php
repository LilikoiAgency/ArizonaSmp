<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION


/**
 * DIZZY'S CUSTOM CLASS
 * (BUT HE'S NOT CUSTOMARILY CLASSY)
 */

include_once(ABSPATH . 'wp-content/themes/semper-arizona-child/php/lead-submission-handler.php');
if (!isset($_GET['curl'])) :
    add_action('init', 'lik_form_submit');
endif;
include_once(ABSPATH . 'wp-content/themes/semper-arizona-child/php/lik-toolkit.php');
include_once(ABSPATH . 'wp-content/themes/semper-arizona-child/php/class-page-augments.php');
/**
 * 
 */
function wpdocs_add_menuitem_role_to_menu_anchors($atts)
{
    $atts['role'] = 'menuitem';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'wpdocs_add_menuitem_role_to_menu_anchors');

get_template_part('template-parts/template', 'tags');