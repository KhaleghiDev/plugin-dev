<?php
/**
 * Plugin Name: edutsn-unvercsity | مدیریت دانشگاه ها 
 * Plugin URI: https://edutsn.com/plugins/edutsn-unvercsity
 * Description: اولین <strong> افزونه مدیریت دانشگاه ها </strong>به صورت بهینه شده <a href="https://wordpress.org">  وردپرس</a>
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author: abolfazl khaleghi
 * Author URI: https://itkhaleghi.ir
 * Licence: GPLv2 or later
 */
// defined("ABSPATH") || exit;
define("EDUTSN_URL",plugin_dir_url( __FILE__ ));
define("EDUTSN_PATH",plugin_dir_path( __FILE__ ));
define("EDUTSN_CSS_URL",EDUTSN_URL . "css/");
define("EDUTSN_LOGO",EDUTSN_URL . "assets/images/logos.png");
define("EDUTSN_ADMIN_URL",EDUTSN_PATH ."admin/");

add_action( 'admin_head', 'custom_edutsn_admin_css' );

function custom_edutsn_admin_css(){
    echo  '<link rel="stylesheet" href="'.EDUTSN_URL.'assets/css/admin-custom.css">';

}
// echo EDUTSN_URL . 'assets/css/admin-custom.css';
// die();
// function enqueue_admin_custom_css(){
// wp_enqueue_style( 'admin-custom', EDUTSN_URL . 'assets/css/admin-custom.css' );
// }
include_once(EDUTSN_ADMIN_URL."register_plugin.php");


include_once(EDUTSN_ADMIN_URL ."menu.php");
add_action("admin_menu","register_edutsn_custom_menu_page");


