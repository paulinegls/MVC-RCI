<?php  

	$pdo = new PDO('mysql:host=localhost;charset=utf8;', 'root', ''); 

	require_once('models/Database.class.php') ; 

	$isactive = NULL;
  if(isset($_GET['db']) AND $_GET['db']!= NULL)
  {
	  $db = $_GET['db'] ; // A completer
	  $isactive = $db;
  }
  
  $list = Database::getDatabasesList() ; 
  include('views/menu.php'); 
	  
?>
