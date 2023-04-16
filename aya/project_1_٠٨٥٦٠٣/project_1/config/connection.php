<!--الاتصال مع قاعدة البيانات -->
<?php
$LocalName="localhost";
$UserName="root";
$Password="";
$DataBase="my_data";
$con=mysqli_connect($LocalName,$UserName,$Password,$DataBase);


if(!$con){
    die("connection failed".mysqli_connect_error());
}




