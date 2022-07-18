<?php

namespace core\traits;

use core\Model;
use PDO;

trait QueryTrait
{
    use ConnectionTrait;

    protected static ?string $tableName = null;

    public static function all(): object|array
    {
        $query = "select * from " . static::$tableName;
        return static::connect()->query($query)->fetchAll(PDO::FETCH_CLASS, static::class);

    }

    public static function find(int $id): object|bool
    {
        $query = "select * from " . static::$tableName . " where id =:id";
        $query = static::connect()->prepare($query);

        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchObject(static::class);
    }

//    protected function choice_column($column){
//        switch ($column) {
//            case "id":
//                $query = "select * from " . static::$tableName . " where id = :value ";
//                break;
//            case "name":
//                $query = "select * from " . static::$tableName . " where name = :value ";
//                break;
//            case "surname":
//                $query = "select * from " . static::$tableName . " where surname = :value ";
//                break;
//            case "email":
//                $query = "select * from " . static::$tableName . " where email = :value ";
//                break;
//            case "password":
//                $query = "select * from " . static::$tableName . " where password = :value ";
//                break;
//            case "birthdate":
//                $query = "select * from " . static::$tableName . " where birthdate = :value ";
//                break;
//        }
//    }

    public static function find_by($column, $value):object
    {

        $query = "select * from " . static::$tableName . " where $column = ? ";

        $query = static::connect()->prepare($query);
        $query->bindValue(1, $value);
        $query->execute();

        return $query->fetchObject(static::class);
    }

    public static function create_user(string $name, string $surname, string $email, string $password, string $birthdate): int
    {

        $query = "INSERT INTO  " . static::$tableName . " (name, surname, email, password, birthdate)  VALUES (?, ?, ?, ?, ?) ";
        $query = static::connect()->prepare($query);
        $query->bindValue(1, $name, PDO::PARAM_STR);
        $query->bindValue(2, $surname, PDO::PARAM_STR);
        $query->bindValue(3, $email, PDO::PARAM_STR);
        $query->bindValue(4, $password, PDO::PARAM_STR);
        $query->bindValue(5, $birthdate, PDO::PARAM_STR);
        $query->execute();

        return self::connect()->lastInsertId();
    }


    public function update_users(array $columValue)
    {
        $query = " update " . static::$tableName . " set ";
        $numberBind = 0;
        foreach ($columValue as $column => $value) {
            if ($numberBind >= 1) {
                $query .= ",";
            }
            $query .= $column . "= ?";
            $numberBind++;

        }

        $query .= " where id=" . $this->id;


        $query = static::connect()->prepare($query);
        $numberBind = 1;
        foreach ($columValue as $column => $value) {

            $query->bindValue($numberBind++, $value);
        }
        $query->execute();
        if ($query->execute() === true) {
            return static::find($this->id);
        } else throw new \Exception("oops update failed");
    }

    public static function delete(int $id): object|string
    {
        $query = "delete from " . static::$tableName . " where id =:id";
        $query = static::connect()->prepare($query);

        $query->bindValue(":id", $id, PDO::PARAM_INT);

        return $query->execute();

    }

    public static function select():Model
    {
        return new static ;
    }

    public function where(array $columnOperatorValue)
    {
        /**
         * $columnOperatorValue = [
        "select"=>"*",
        "column"=>"email",
        "operator"=>"=",
        "value"=>"1234@sdf"

        ];пример вводимого массива
         */

        $query = "select " .$columnOperatorValue["0"] . " from " .   static::$tableName . " where " . $columnOperatorValue["1"] . " " . $columnOperatorValue["2"] . " ? "  ;

        $query = static::connect()->prepare($query);

        $query->bindValue(1, $columnOperatorValue["3"] );
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, static::class);



    }

}

