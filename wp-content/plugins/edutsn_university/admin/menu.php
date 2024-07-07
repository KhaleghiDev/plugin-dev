<?php

function register_edutsn_custom_menu_page() {
    add_menu_page('مدیریت دانشگاه', 'مدیریت دانشگاه', 'add_users', 'edutsn_unversity', 
    '_edutsn_custom_menu_page', EDUTSN_LOGO,15);
}
add_action('admin_menu', 'register_custom_menu_page');

function _edutsn_custom_menu_page(){
    echo '
    <br><img class="logo_edutsn" src="'.EDUTSN_LOGO .'" whith="28px" hegint="28px"><h1 class="edutsn-title wp-heading-inline" >مدیریت دانشگاه ها </h1>';
}

