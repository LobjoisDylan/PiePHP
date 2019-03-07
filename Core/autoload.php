<?php

function loadingClass($class) {
  $path = str_replace('\\', '/', $class) . '.php';

  if(is_dir("Core") && file_exists($path))
  {
    require_once $path;
  }

  else
  {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/PiePHP/src/" . $path;
  }
}
spl_autoload_register('loadingClass');
