<?php

namespace App\controller\admin;

use App\helpers\SessionHelper;
use core\Controller;

class BaseController extends Controller
{
public function before(string $action): bool
{
    if (!SessionHelper::isUserLoginIn()){
        redirect("login");
    }
    return true;
}

}