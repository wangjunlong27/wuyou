<?php
namespace model;
/**
* 
*/
class DB
{
   public $pdo;
   public function __construct()
   {
   	  $db=C('db');
   	  $this->pdo=new pdo(
   	  	'mysql:host='.$db['host'].';dbname='.$db['dbname'],
   	  	$db['username'],
   	  	$db['password']
   	  	);
   }
    public function select($value='')
    {
	   $result=$this->pdo->query($value);
	   return $result->fetchAll();
    }

}

