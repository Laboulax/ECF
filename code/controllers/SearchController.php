<?php

class SearchController {
    public function handle() {
        $ville = "";
        
if (isset($_POST['ville'])) {
    $ville = "value = ". $_POST['ville'];
}
        require_once '../views/header.php';
        require_once '../views/search.php';
        require_once '../views/footer.php';
}
}