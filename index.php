 <?php 
 require 'Controllers/ArmoireController.php';

 if (!isset($_GET['id'])) {
 	(new ArmoireController())->home();
 }
 if (isset($_GET['id']) && !isset($_GET['action'])){
 	(new ArmoireController())->detail();
 }
else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
	(new ArmoireController())->edit();
}



 ?>