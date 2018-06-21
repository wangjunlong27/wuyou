<?php 
namespace Controller;

/**
* 
*/
class Controller
{
	public $assign=[];

	public function display($path)
	{
		extract($this->assign);
		include './view/'.$path.'.php';
		
	}

	public function assign($key,$value)
	{
		$this->assign[$key]=$value;
	}
	
}








 ?>