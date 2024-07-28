<?php

require_once 'Controller.php';

class HomeController extends Controller {
    public function handleRequest() {
        $this->loadPage('home_landing', 'home');
    }
}

?>