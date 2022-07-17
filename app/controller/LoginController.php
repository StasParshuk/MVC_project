<?php

namespace App\controller;


use core\Controller;
use core\View;

class LoginController extends Controller
{
    public function login()
    {
        View::render("auth/login");
    }

    public function registration()
    {
    }

    public function verify()
    {
         dd($_REQUEST);
    }

    public function store()
    {
    }

    public function before(string $action): bool
    {
        return parent::before($action);
    }

}

