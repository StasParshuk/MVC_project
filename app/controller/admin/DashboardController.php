<?php

namespace App\controller\admin;

use core\View;

class DashboardController extends \core\Controller
{
    public function index()
    {
        return View::render("admin/dashboard");
    }
}

