<?php

namespace config;
class Config
{
    public static function get(string $name)
    {
        $configs = include __DIR__ . "/configs.php";
        $keys = explode(separator: ".", string: $name);

        return self::find_keys($keys, $configs);

    }

    private static function find_keys(array $keys, array $configs): mixed
    {
        $value = null;
        if (empty($keys)) {
            return $value;
        }
        $key = array_shift($keys);

        if (array_key_exists($key, $configs)) {
            $value = is_array($configs[$key]) ? self::find_keys($keys, $configs[$key]) : $value = $configs[$key];
        }

        return $value;
    }
}

