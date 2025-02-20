<?php

class HomeController {
    public function handle() {
        require_once '../views/header.php';
        require_once '../views/home.php';
        require_once '../views/footer.php';
    }
}