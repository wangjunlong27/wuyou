<?php
namespace Controller\Home;
//http://localhost/yii-basic-2.0.15/basic/web/index.php?r=site%2Flogin
use Controller\Controller;
use Model\DB;

/**
* 
*/
class Back extends Controller
{
	public function index($value='')
	{
		$this->display('bac/index');
	}
	public function notFind($value='')
	{
		$this->display('bac/404');
		# code...
	}

	public function blank($value='')
	{
		$this->display('bac/_blank');
		# code...
	}

	public function footer($value='')
	{
		$this->display('bac/_footer');
		# code...
	}

	public function header($value='')
	{
		$this->display('bac/_header');
		# code...
	}

	public function menu($value='')
	{
		$this->display('bac/_menu');
		# code...
	}

	public function meta($value='')
	{
		$this->display('bac/_meta');
		# code...
	}
	public function admin_add()
	{
	    $this->display('bac/admin_add');

		
	}

	public function admin_list()
	{
	    $this->display('bac/admin_list');

		
	}

	public function admin_role()
	{
	    $this->display('bac/admin_role');

		
	}

	public function admin_password_edit()
	{
	    $this->display('bac/admin_password_edit');

		
	}

	public function admin_permission()
	{
	    $this->display('bac/admin_permission');

		
	}

	public function admin_role_add()
	{
	    $this->display('bac/admin_permission');

		
	}

	public function article_class_edit()
	{
		$this->display('bac/article_class_edit');
	}

	public function article_add()
	{
		$this->display('bac/article_add');
	}

	public function article_class()
	{
		$this->display('bac/article_class');
	}

	public function article_list()
	{
		$this->display('bac/article_list');
	}

	public function change_password()
	{
		$this->display('bac/change_password');
	}

	public function login()
	{
		$this->display('bac/login');
	}

	public function member_add()
	{
		$this->display('bac/member_add');
	}

	public function member_list($value='')
	{
		$this->display('bac/member_list');
	}

	public function member_del($value='')
	{
		$this->display('bac/member_del');
	}

	public function member_show($value='')
	{
		$this->display('bac/member_show');
	}

	public function member_record_browse($value='')
	{
		$this->display('bac/member_record_browse');
	}
    
    public function member_record_share($value='')
	{
		$this->display('bac/member_record_share');
	}


	public function member_record_download($value='')
	{
		$this->display('bac/member_record_download');
	}

	public function pictureList($value='')
	{
		$this->display('bac/picture_list');
	}


	public function productAdd($value='')
	{
		$this->display('bac/product_add');
	}

	public function productBrand($value='')
	{
		$this->display('bac/product_brand');
		# code...
	}

	public function productCategory($value='')
	{
		$this->display('bac/product_category');
		# code...
	}

	public function productCategoryAdd($value='')
	{
		$this->display('bac/product_category_add');
		# code...
	}

	public function productList($value='')
	{
		$this->display('bac/product_list');
		# code...
	}

	public function recordBrowse($value='')
	{
		$this->display('bac/record_browse');
	}

	public function recordDownload($value='')
	{
		$this->display('bac/record_download');
	}

	public function recordShare($value='')
	{
		$this->display('bac/record_share');
	}

	public function systemBase($value='')
	{
		$this->display('bac/system_base');
	}

	public function system_category($value='')
	{
		$this->display('bac/system_category');
	}

	public function system_category_add($value='')
	{
		$this->display('bac/system_category_add');
	}

	public function system_data($value='')
	{
		$this->display('bac/system_data');
	}

	public function system_log($value='')
	{
		$this->display('bac/system_log');
	}

	public function system_shielding($value='')
	{
		$this->display('bac/system_shielding');
	}
    
    public function user_add($value='')
	{
		$this->display('bac/user_add');
	}
    
    public function user_list($value='')
	{
		$this->display('bac/user_list');
	}
     
    public function user_password_edit($value='')
	{
		$this->display('bac/user_password_edit');
	}
    
    public function user_show($value='')
	{
		$this->display('bac/user_show');
	}

	public function welcome()
	{
		$this->display('bac/welcome');
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
	


