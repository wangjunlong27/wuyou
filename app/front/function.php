<?php 
function C($key){
	global $config;
	return $config[$key];
}

function __autoload($className)
{
	// echo $className;
	// echo "<hr/>";

	include './'.$className.'.php';
}

function url($controller,$action,$param=[])
{
	//'http://www.a.com/index.php?'

	$url=APP_HOST.'/index.php?t='.$controller.'&a='.$action;
	if (!empty($param)) {
		foreach ($param as $key => $value) {
			$url.='&'.$key.'='.$value;
		}
	}
	return $url;
}

// function redirect($url)
// {

// }

// function getImg($imgSrc)
// {
// 	return APP_HOST.'/public/img/'.$imgSrc;
// }

// function getJs($getJs)
// {
// 	# code...
// }

// function getCss($cssSrc)
// {
// 	# code...
// }






 ?>