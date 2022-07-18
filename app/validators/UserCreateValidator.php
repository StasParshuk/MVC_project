<?php

namespace App\validators;

use App\model\User;
use App\validators\base\UserBaseValidator;

class UserCreateValidator extends UserBaseValidator
{
    protected array $errors = [
        "name_error" => "the name should contain more than 2 letters",
        "surname_error" => "the surname should contain more than 2 letters",
        "birthdate_error" => "birthdate date is invalid",
        "email_error" => "email invalid",
        "password_error" => "The password should contain more 7 symbols "
    ];
    protected array $rules = [
        'name' => '/[A-Za-zА-Яа-я]{2,}/',
        'surname' => '/[A-Za-zА-Яа-я]{2,}/',
        'birthdate' => '/[\d]{4}-[\d]{2}-[\d]{2}/',
        'email' => '/^[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i',
        'password' => '/[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]{8,}/'
    ];

}

