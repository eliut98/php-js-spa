<?php

class Router
{
    protected static $routes = [];

    public static function load($routes)
    {
        self::$routes = $routes;
        return new self();
    }

    public static function to($uri)
    {
        if (array_key_exists($uri, self::$routes)) {
            return './controllers/' . self::$routes[$uri] . '.php';
        }
        throw new Exception("No route defined for this URI.");
    }
}
