<?php
require_once CONFIG_DIR.'/database.php';


function getDB(){
  static $db;
  if($db instanceof PDO){
    return $db;
  }


  $dsn=sprintf("mysql:host=%s;dbname=%s;charset=%s",DB_HOST,DB_DATABASE,DB_CHARSET);
   
  $db=new PDO($dsn,DB_USERNAME,DB_PASSWORD);
  return $db;
}