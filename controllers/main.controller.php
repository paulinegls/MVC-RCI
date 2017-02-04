  <?php  

	$pdo = new PDO('mysql:host=localhost;charset=utf8;', 'root', ''); 

  require_once('models/Database.class.php'); 
  require_once('models/Table.class.php'); 

	$isactive = NULL;
  if(isset($_GET['db']) AND $_GET['db']!= '')
  {
	  $db = $_GET['db'] ; 
	  $isactive = $db;
  }
  
  $list = Database::getDatabasesList(); 
  include('views/menu.php'); 
 
	if(isset($db) AND $tables = Table::getTablesList($db)){
		$db_view = include_once 'views/database.php' ; 
	}
	  
?>
