<?php
namespace Controller\Home;
use Controller\Controller;
use Model\DB; 
class User extends Controller
{
	
	function login()
	{
		$db=new DB();
		var_export($db);die;
		$this->display('view/login');
	}

	public function doLogin()
	{
		print_r($_POST);
	}

	public function register($value='')
	{
		echo "this is register action";
		# code...
	}

	


}