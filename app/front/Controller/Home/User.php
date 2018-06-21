<?php
namespace Controller\Home;
//http://localhost/yii-basic-2.0.15/basic/web/index.php?r=site%2Flogin
use Controller\Controller;
use Model\DB;

/**
* 
*/
class User extends Controller
{
	public function login()
	{
		$user=[
		     'id'=>1,
		     'name'=>'张三'
		];
	    $this->assign('user',$user);
	    $this->assign('is_rich','不是');
	    $this->display('user/user');

		
	}

	public function doLogin()
	{
		print_r($_POST);
	}

	public function register()
	{
		echo "this is register action";
	}
}
	


