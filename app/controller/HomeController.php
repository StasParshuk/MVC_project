<?php

namespace App\controller;

use core\Controller;
use core\Model;
use core\View;

class HomeController extends Controller
{
    public function home()
    {
        View::render("auth/home");
    }
}

