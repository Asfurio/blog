<?php
class Autoload
{
    private static $classDirectory = "./classe/";

    public static function classeAutoloader ($class) {
        $path = static::$classDirectory . "$class.php";
        if (file_exists($path)&& is_readable($path)) require $path;
        var_dump($class);
    }
}