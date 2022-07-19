<?php

namespace App\controller;


use App\helpers\SessionHelper;
use App\model\User;
use App\validators\AuthValidator;
use App\validators\UserCreateValidator;
use core\Controller;
use core\View;

class LoginController extends Controller
{


    public function login()
    {
        if (SessionHelper::isUserLoginIn()){
            redirect();
        }
        View::render("auth/login");
    }

    public function registration()
    {
        if (SessionHelper::isUserLoginIn()){
            redirect();
        }
        View::render("auth/registration");
    }

    public function logout(){
        if (SessionHelper::isUserLoginIn()){
            SessionHelper::destroy();
        }

        redirect();
    }

    public function verify()
    {
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new AuthValidator();

        if ($validator->validate($fields) && $user = $validator->checkEmailOnExist($fields["email"])) {
            if ($validator->verifyPassword($fields["password"], $user->password)) {
                SessionHelper::setUserData($user->id);
                redirect();
            }
        }
        $this->data['data'] = $fields;
        $this->data += $validator->getErrors();
        View::render("auth/login", $this->data);
    }

    public function before(string $action): bool
    {
        return parent::before($action);
    }

}

