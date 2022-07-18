<?php

namespace App\helpers;

class SessionHelper
{
    public static function isUserLoginIn(): bool
    {
        return !empty($_SESSION["user_data"]);
    }

    public function UserId()
    {
        return !empty($_SESSION["user_data"]["id"]);
    }

    public static function setUserData($id, ...$args)
    {
        $_SESSION['user_data'] = array_merge(
            [
                "id" => $id
            ], $args);
    }
    public static function destroy():void{
session_destroy();
    }
}