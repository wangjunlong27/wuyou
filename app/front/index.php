<?php

define('APP_HOST', $_SERVER['HTTP_HOST']);
$controller=isset($_GET['c']) ? ucfirst($_GET['c']) : 'User';
$action=isset($_GET['a']) ? ucfirst($_GET['a']) : 'login';
$config=include('./config.php');
$controller='\Controller\Home\\'.$controller; 
include './function.php';
$obj=new $controller();
$obj->$action($config);die;










