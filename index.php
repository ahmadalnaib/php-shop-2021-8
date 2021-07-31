<?php
define('CONFIG_DIR',__DIR__.'/config');
require_once __DIR__.'/function/database.php';



$sql="SELECT * FROM products";
$result= getDB()->query($sql);


 require __DIR__.'/template/main.php';