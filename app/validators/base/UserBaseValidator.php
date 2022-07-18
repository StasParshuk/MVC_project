<?php

namespace App\validators\base;

use App\model\User;

class UserBaseValidator extends BaseValidator
{

    public function checkEmailOnExist($email): bool|User|array
    {

        if ($user = User::select()->where(["*", "email", "=", $email])) {
            $this->errors = ["user with this email alredy exists"];
            return $user;
        }
        return false;
    }


}


