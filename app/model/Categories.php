<?php

namespace App\model;

use core\Model;
use PDO;

class Categories extends Model
{
    protected static ?string $tableName = "categories";
    public static function create_categories(){

        $query = "INSERT INTO  " . static::$tableName . " (tegs)  VALUES (?) ";
        $query = static::connect()->prepare($query);
        $query->bindValue(1, $_POST["tegs"], PDO::PARAM_STR);
        $query->execute();

        return self::connect()->lastInsertId();
    }
}
