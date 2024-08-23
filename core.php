<?php
/*
Plugin Name: scroll to top
Plugin URI: https://github.com/sadeq-yaqobi/WP-plugin-scrollToTop/
Description: پلاگین اسکرول به بالای صفحه
Author: Sadeq Yaqobi
Version: 1.0.0
License: GPLv2 or later
Author URI:https://github.com/sadeq-yaqobi/
*/
#for security
defined('ABSPATH') || exit();

#defining required const
define('STT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('STT_PLUGIN_URL', plugin_dir_url(__FILE__));
const STT_PLUGIN_INC = STT_PLUGIN_DIR . '_inc/';
const STT_PLUGIN_VIEW = STT_PLUGIN_DIR . 'view/';
const STT_PLUGIN_ASSETS_DIR = STT_PLUGIN_DIR . 'assets/';
const STT_PLUGIN_ASSETS_URL = STT_PLUGIN_URL . 'assets/';

#activation and deactivation function
function sst_register_assets()
{
// style registering
    wp_register_style('stt-style', STT_PLUGIN_ASSETS_URL . 'css/style.css', '', '1.0.0');
    wp_enqueue_style('stt-style');
// js registering
    wp_register_script('stt-main-js', STT_PLUGIN_ASSETS_URL . 'js/main.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('stt-main-js');
}
// Register asset registration actions for front-end
add_action('wp_enqueue_scripts', 'sst_register_assets');

include_once STT_PLUGIN_VIEW . 'front/scroll-to-top-layout.php';