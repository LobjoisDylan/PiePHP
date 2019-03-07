<?php

namespace Core;
class Router {
  private static $routes;
  public static function connect ($url, $route) {
    self::$routes[$_SERVER['REQUEST_URI']] = $route;
    //var_dump(self::$routes);
    self::get($url);
  }
  public static function get ($url) {
    $controller = "\Controller\\" . ucfirst(self::$routes[$url]['controller'] . "Controller");
    $action = self::$routes[$url]['action'] . "Action";

    if(class_exists($controller) && method_exists($controller, $action))
    {
      $controller::$action();
    }
  }
}
