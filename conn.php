<?php


//pdo ile bağlanma

try
{
  $db=new PDO("mysql:host=127.0.0.1;dbname=users;charset=utf8","root","");
}
catch(PDOException $e)
{
  print $e->getMessage();
}




?>