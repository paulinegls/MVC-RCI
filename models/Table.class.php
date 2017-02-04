<?php

include_once 'config.php';

class Table{
  private $name;
  private $attributes;

  // Private constructor, tables can not be instanciated by users
  private function __construct(){} 

  public static function getTablesList($dbname){
    $pdo = new PDO("mysql:host=localhost;charset=utf8;", $GLOBALS['config']['username'], $GLOBALS['config']['pwd']);
    $stmt = $pdo->prepare("show tables from ".$dbname);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    return $res;
  }

  public static function getFieldsList($dbname, $tableName){
    $pdo = new PDO("mysql:host=localhost;charset=utf8;", $GLOBALS['config']['username'], $GLOBALS['config']['pwd']);
    $stmt = $pdo->prepare("show columns from ".$dbname.".".$tableName);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    return $res;
  }

  public static function selectFromTable($dbname, $tableName){
    $pdo = new PDO("mysql:host=localhost;charset=utf8;dbname=".$dbname, $GLOBALS['config']['username'], $GLOBALS['config']['pwd']);
    $stmt = $pdo->prepare("SELECT * FROM ".$tableName);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    return $res;
  }
}