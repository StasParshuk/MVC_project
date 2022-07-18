<?php

namespace App\controller;

use App\model\User;
use App\validators\UserCreateValidator;
use core\Controller;
use core\View;

class UsersController extends Controller
{

    public function store()
    {
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new UserCreateValidator();


        if ($validator->validate($fields) && !$validator->checkEmailOnExist($fields["email"])) {

            $userId = User::create_user($fields["name"], $fields["surname"], $fields["email"], password_hash($fields["password"], PASSWORD_DEFAULT), $fields["birthdate"]);
            if ($userId) {

                redirect();
            }

        }
        $this->data['data'] = $fields;
        $this->data += $validator->getErrors();
        View::render("auth/registration", $this->data);
    }
}

