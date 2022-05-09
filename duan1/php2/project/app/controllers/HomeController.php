<?php
namespace App\Controllers;

use App\Models\User;

class HomeController {
    public function index() {
        $data = User::$data;
        require_once './app/views/home/index.php';;
    }
}

?>