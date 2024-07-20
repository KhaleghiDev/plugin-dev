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


add_action( 'admin_footer', 'custom_edutsn_admin_js' );
function custom_edutsn_admin_js(){
  wp_enqueue_style(
      'edutsn_style_custum_js',
  EDUTSN_URL.'assets/js/admin-custom.js',
  [] ,
  WP_DEBUG ? time() : EDUTSN_verstion,
);

}