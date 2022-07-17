<?php

namespace App\model;

use core\Model;

class User extends Model
{
protected static ?string $tableName = "users";


    public function full_name():string
    {
        return $this->name . "  " .  $this->surname;
    }
}