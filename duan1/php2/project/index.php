<?php
require_once './vendor/autoload.phpcomposer require phroute/phroute';


use App\Controllers\HomeController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch($url){
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
        
}

?>