<?php
// Basic controller demo
class HomeController {
    public function index() {
        return 'Welcome to the Laravel Demo Homepage!';
    }
}

class UserController {
    public function list() {
        return [
            new User(1, 'Alice'),
            new User(2, 'Bob'),
        ];
    }
}
