<?php
add_action( 'admin_head', 'custom_edutsn_admin_css' );

function custom_edutsn_admin_css(){
    wp_enqueue_style(
        'edutsn_style_custum_css',
    EDUTSN_URL.'assets/css/admin-custom.css',
    [] ,
    WP_DEBUG ? time() : EDUTSN_verstion,
  );

}