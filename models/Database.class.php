<?php

include_once 'config.php';

class Database{

  private $name;
  private $tables;
  // Private constructor, tables can not be instanciated by users
  private function __construct($name, $tables = array()){
    $this->name = $name;
    $this->tables = $tables;
  } 

  public static function getDatabasesList(){
    $pdo = new PDO("mysql:host=localhost;charset=utf8;", $GLOBALS['config']['username'], $GLOBALS['config']['pwd']);
    $stmt = $pdo->prepare("SHOW DATABASES");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $res = $stmt->fetchAll();
    return $res;
  }

}