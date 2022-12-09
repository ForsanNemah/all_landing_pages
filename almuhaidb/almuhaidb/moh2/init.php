<?php

session_start();

$host="localhost";
$db_user="u717104632_rootmoh";
$db_password="Forsan@2022";
$db_name="u717104632_moh";
$con = mysqli_connect($host,$db_user,$db_password,$db_name);

$_SESSION['host']=$host;
$_SESSION['db_user'] = $db_user;
$_SESSION['db_password'] = $db_password;
$_SESSION['db_name'] = $db_name;
 
  

?>

