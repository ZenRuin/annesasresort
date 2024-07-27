<?php

class HomeController extends Controller {
    public function handleRequest() {
        $this->loadPage('home_landing', 'home');
    }
}

?>