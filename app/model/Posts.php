<?php

namespace App\model;

use core\Model;
use PDO;

class Posts extends Model
{
    protected static ?string $tableName = "posts";
    public static function create_posts($title,$description,$categories_id,$user_id,$image){
//dd($title,$description,$categories_id,$user_id,$image);
        $query = "INSERT INTO  " . static::$tableName . " (title, description ,category_id,user_id,image)  VALUES (?,?,?,?,?) ";
        $query = static::connect()->prepare($query);
        $query->bindValue(1, $title, PDO::PARAM_STR);
        $query->bindValue(2, $description, PDO::PARAM_STR);
        $query->bindValue(3, $categories_id, PDO::PARAM_STR);
        $query->bindValue(4, $user_id, PDO::PARAM_STR);
        $query->bindValue(5, $image, PDO::PARAM_STR);
        $query->execute();

        return self::connect()->lastInsertId();
}}

