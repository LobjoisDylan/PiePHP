<?php

namespace Core;
class Controller {

  private static $_render;
  protected function render($view, $scope = []) {
    extract($scope);
    $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
    str_replace('Controller', 'User', basename(get_class($this))), $view]) . '.php';
    $d = str_replace('\\', "/", $f);

    if (file_exists($d)) {
      ob_start();
      include($d);
      $view = ob_get_clean();
      ob_start();
      include(implode(DIRECTORY_SEPARATOR,[dirname(__DIR__), 'src', 'View',
      'index']) . '.php');
      self::$_render = ob_get_clean();
      echo self::$_render;
    }
  }
}
