<?php
class Route
{
    private static $routes = [
        'GET' => [
            //""=> [controllers/Pagecontroller, index];
        ],
        'POST' => [],
    ];
    public static function load($filename)
    {
        require $filename;
        return new Route;
    }
    public static function list()
    {
        return static::$routes;
    }
    public static function get($uri, $controller)
    {

        static::$routes['GET'][$uri] = $controller;
    }
    public static function post($uri, $controller)
    {
        static::$routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $method)
    {
        if (array_key_exists($uri, static::$routes[$method])) {
            $explosion = static::$routes[$method][$uri];
            // dd($explosion[0]);
            $this->callMethod($explosion[0], $explosion[1]);
        } else {
            die("<h1>404 Not Found!</h1>");
        }
    }
    public function callMethod($class, $method)
    {
        $class = new $class;
        $class->$method();
    }
}
