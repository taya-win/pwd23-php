<?php
namespace Helpers;
class Http
{
    static $base = "https://pwd23-php.test";
    static function redirect($path, $query = "")
    {
        $url = static::$base . $path;
        if($query) $url .= "?$query";
        
        header("location: $url");
        exit();
    }
}
