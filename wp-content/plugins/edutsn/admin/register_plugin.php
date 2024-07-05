<?php

register_activation_hook(__FILE__,function (){
    $massage="در سایت ". home_url() ." فعال شد ";
    notificator_send_message($massage);

});

//  deactivation edutsn plugin
register_deactivation_hook(__FILE__,function (){
    $massage="در سایت ". home_url() ." غیر فعال  شد ";
    notificator_send_message($massage);
});