<?php 
require 'vendor/autoload.php';

class Armoire {
	private $db; 
	public static $id;

	public function __construct(){
		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');
		$this->db=ORM::for_table('mes_chaussettes');
	}
	public function getInstance(){
		return $this->db;
	}
	public static function all($limit=10,$offset=NUll){
		$f = new self();
		$result=$f->getInstance()
		->limit($limit)
		->offset($offset)
		->find_many();
		return $result;

	}
	public static function get($id){
		$i = new self();
		$getId = $i->getInstance()
		->where("id",$id)
		->find_many();
		return $getId;
	}
} 
?>