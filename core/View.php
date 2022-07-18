<?php

namespace core;

class View
{
    public static function render($view, $args = []):string
    {

        extract($args, EXTR_SKIP);

        $file = WIEVDIR . '/' . $view . ".php";
        if (is_readable($file)){
           return require $file;
        }else throw new \Exception('NOT FOUND FILE RENDER');
}
}

