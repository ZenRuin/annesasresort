<?php

require_once 'Controller.php';

class UsersController extends Controller {
    public function handleRequest() {
        $this->loadPage('users', 'users');
    }
}

?>