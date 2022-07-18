<?php

namespace App\validators;

use App\model\User;
use App\validators\base\UserBaseValidator;

class AuthValidator extends UserBaseValidator
{
    protected array $errors = [
        "email_error" => "email or password is invalid",
        "password_error" => "email or password is invalid"
    ];
    protected array $rules = [
        'name' => '/[A-Za-zА-Яа-я]{2,}/',
        'surname' => '/[A-Za-zА-Яа-я]{2,}/',
        'birthdate' => '/[\d]{4}-[\d]{2}-[\d]{2}/',
        'email' => '/^[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i',
        'password' => '/[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]{8,}/'
    ];

    public function checkEmailOnExist($email): bool|User|array
    {

        if ($user = User::find_by("email", $email)) {

            $this->errors = ["user with this email alredy exists"];
            return $user;
        }
        return false;
    }

    public function verifyPassword($formPass, $userPass): bool
    {
        if (password_verify($formPass, $userPass)) {
            $this->errors["password_error"] = "some wrong ";
            return false;
        }
        return true;
    }
}

