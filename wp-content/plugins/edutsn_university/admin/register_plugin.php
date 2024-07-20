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
register_activation_hook(__FILE__,edutsn_install_db());
function edutsn_install_db(){
   global $wpdb;

   $query=[
      [
         "table_name"=>"edutsn_grate",
         "table_sql"=>"CREATE TABLE `$table_grate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8mb4_german2_ci NOT NULL,
  `createat_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=$table_COLLATE;
",
   ],
   ];





   $table_grate=$wpdb->prefix."edutsn_grate";
   
   $table_COLLATE=$wpdb->collate;

   $sql="CREATE TABLE `$table_grate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8mb4_german2_ci NOT NULL,
  `createat_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=$table_COLLATE;
";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
}