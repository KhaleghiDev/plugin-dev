<?php
include_once(plugin_dir_path(__FILE__) ."lib/notificator.php");
register_activation_hook( __FILE__,function ()  {
   $massage="در سایت ". home_url() ." فعال شد ";
   notificator_send_message($massage);

});
register_deactivation_hook( __FILE__,function () {
   $massage="در سایت ". home_url() ." غیر فعال  شد ";
   notificator_send_message($massage);
});