<?php

require_once __DIR__ .'/settings.php';

$page       = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ?  $_REQUEST['page'] : 'index';
$file       =  APP_PATH ."/pages/$page.php";

if(file_exists ($file)){
    require_once APP_PATH .'/partials/header.php';
    require_once $file;
    require_once APP_PATH .'/partials/footer.php';
}else{
    http_response_code(404);
    require_once APP_PATH.'/pages/404.php';
    die();
}

