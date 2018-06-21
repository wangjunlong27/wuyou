<?php

define('APP_HOST', $_SERVER['HTTP_HOST']);
define('APP',__DIR__);
$controller=isset($_GET['c']) ? ucfirst($_GET['c']) : 'Back';
$action=isset($_GET['a']) ? ucfirst($_GET['a']) : 'index';
$config=include('./config.php');
$controller='\Controller\Home\\'.$controller; 
include './function.php';
$obj=new $controller();
$obj->$action($config);die;










