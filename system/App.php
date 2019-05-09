<?php
namespace system;

class App
{
    public static function run()
    {;
        // 开启session
        \session_save_path(ROOT_PATH . 'public/session');
        \session_start();
        // 设置时区
        \date_default_timezone_set("Asia/Shanghai");
        // 请求分发
        self::dispatch();
    }

    private static function dispatch()
    {
        $uri = \explode('/', \trim(isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/', '/'));
        $controller = !empty($uri[0]) ? \ucfirst($uri[0]) : 'Home';
        $method = !empty($uri[1]) ? $uri[1] : 'index';
        $param = !empty($uri[2]) ? \array_slice($uri, 2) : [];
        $controllerClass = '\\app\\controllers\\' . $controller;
        if (\class_exists($controllerClass)) {
            $controllerObject = new $controllerClass();
            if (\method_exists($controllerObject, $method)) {
                $controllerObject->$method($param);
            } else {
                self::errorController();
            }
        } else {
            self::errorController();
        }
    }

    private static function errorController()
    {
        (new \app\controllers\No())->index();
    }
}
