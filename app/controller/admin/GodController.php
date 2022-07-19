<?php

namespace App\controller\admin;

use core\Controller;
use core\View;

class GodController extends Controller
{
public function admin(){
    $_SESSION["god"] = true;
    redirect();
}
    public function notadmin(){
        unset( $_SESSION["god"]);
        redirect();
    }

}
