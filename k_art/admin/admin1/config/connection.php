<!--الاتصال مع قاعدة البيانات -->
<?php





$LocalName="localhost";
$UserName="u717104632_k_art_1_root";
$Password="Forsan@2023";
$DataBase="u717104632_k_art_1";






/*
$LocalName="localhost";
$UserName="root";
$Password="";
$DataBase="k_art_project_1";
*/


$con=mysqli_connect($LocalName,$UserName,$Password,$DataBase);


if(!$con){
    die("connection failed".mysqli_connect_error());
}




