  <?php
  include_once 'config.php';

	$pdo = new PDO('mysql:host=localhost;charset=utf8;', $GLOBALS['config']['username'], $GLOBALS['config']['pwd']); 

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
 
	if(isset($db) && $tables = Table::getTablesList($db)){
    if(isset($_GET['table']) && $fields = Table::getFieldsList($db, $_GET['table'])){
      $table_name = $_GET['table'];
      $rows = Table::selectFromTable($db, $table_name);
      include_once 'views/table.php';
    }else{
		  include_once 'views/database.php';
    }
	}
	  
?>
