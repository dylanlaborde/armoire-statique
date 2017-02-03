<?php 

require 'Models/Armoire.php';
class ArmoireController extends Armoire{
	
	public function home(){
		$armoire = Armoire::all(50);
		require 'Views/SocksTable.php';
	}
	public function detail(){
		$socksID = Armoire::get($_GET["id"]);
		require 'Views/detail.php';
	}
}
?>