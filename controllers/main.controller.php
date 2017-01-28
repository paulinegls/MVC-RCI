<?php  

	$pdo = new PDO('mysql:host=mysql; charset=utf8;', 'root', ''); 

	require_once('models/Database.class.php') ; 

	  if(isset($_GET['db']) AND $_GET['db']!= NULL)
	  {
		  $db = $_GET['db'] ; // A completer
	  }
	  
	  $list = Database::getDatabasesList() ; 
	  include('views/menu.php'); 
	  
?>
