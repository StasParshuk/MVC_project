<?php

namespace App\controller\categories;

use App\helpers\SessionHelper;

class BaseController extends \core\Controller
{
    public function before(string $action): bool
    {
        if (!SessionHelper::isUserLoginIn()){
            redirect("login");
        }
        return true;
    }
}