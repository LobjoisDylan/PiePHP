<?php

$test = explode('/', $_SERVER['REQUEST_URI']);

if(isset($test[5]) && $test[5] == "register.php")
{
    Core\Router::connect('/PiePHP/src/View/User/register.php', ['controller' => 'user', 'action' => 'register']);
}

else if(isset($test[5]) && $test[5] == "login.php")
{
  Core\Router::connect('/PiePHP/src/View/User/login.php', ['controller' => 'user', 'action' => 'register']);
}

else if(isset($test[5]) && $test[5] == "index.php")
{
  Core\Router::connect('/PiePHP/src/View/User/index.php', ['controller' => 'user', 'action' => 'register']);
}

else if(isset($test[2]) && $test[2] != "src" && $test[2] != "")
{
  View\Error\Error::err();
}

else if(isset($test[1]) && $test[1] == "PiePHP")
{
  Core\Router::connect('/PiePHP/', ['controller' => 'app', 'action' => 'index']);
  Core\Router::connect('/PiePHP/', ['controller' => 'user', 'action' => 'add']);
  Core\Router::connect('/PiePHP/', ['controller' => 'user', 'action' => 'test']);
}
