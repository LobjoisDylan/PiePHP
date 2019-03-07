<?php

namespace Core;
class Core
{
  public function run() {

    require ("route.php");

    /*  if(isset($_GET['c']) && isset($_GET['a']))
    {
    $get_controller = $_GET['c'];
    $get_action = $_GET['a'];

    $controller = (isset($get_controller)) ? $get_controller . 'Controller' : 'AppController';
    $action = (isset($get_action)) ? $get_action . 'Action' : 'indexAction';

    $instance_controller = '\Controller\\' . $controller;
    $instance_action = $action;
    $instance_controller::$instance_action();
  }

  if(empty($_GET['c']) || empty($_GET['a']))
  {
  echo "Error 404";
}

if(isset($_GET['c']) && isset($_GET['a']))
{
\Controller\AppController::indexAction();
} */

  }
}
