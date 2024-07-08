<?php

function register_edutsn_custom_menu_page() {
    add_menu_page('مدیریت دانشگاه', 'مدیریت دانشگاه', 'add_users', 'edutsn_unversity', 
    '_edutsn_custom_menu_page', EDUTSN_LOGO,15);
}
add_action('admin_menu', 'register_custom_menu_page');

function _edutsn_custom_menu_page(){
 require_once(EDUTSN_ADMIN_URL."form.php");
}

