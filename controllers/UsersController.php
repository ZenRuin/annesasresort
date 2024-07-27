<?php

class UsersController extends Controller {
    public function handleRequest() {
        $this->loadPage('users', 'users');
    }
}

?>