<?php

require_once 'Controller.php';

class AdminController extends Controller {
    public function handleRequest() {
        $this->loadPage('admin', 'admin');
    }
}

?>