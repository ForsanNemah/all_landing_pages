<!--الاتصال مع قاعدة البيانات -->
<?php
$LocalName="localhost";
$UserName="u717104632_ayaroot";
$Password="Forsan@2023";
//**************************************
$DataBase="u717104632_aya";
$con=mysqli_connect($LocalName,$UserName,$Password,$DataBase);
//*******************************

//إنشاء قاعدة بيانات
/*$sql="CREATE DATABASE my_data";
mysqli_query($con,$sql);*/

if(!$con){
    die("connection failed".mysqli_connect_error());

}

//إنشاء جدول الروابط /*

$query="create table dep_url(id int(10) primary key auto_increment,
                              department_id int(10) not null ,
                              url varchar(50),
                              block int(1))";

mysqli_query($con,$query);


/*إنشاء جدول الأقسام */
$query="create table department(department_id int(10) primary key auto_increment,
                              dep_name varchar(50) not null ,
                              block int(1))";
mysqli_query($con,$query);



/*إنشاء جدول الأدمن */
$query="create table admins(id int(10) primary key auto_increment,
                              ad_name varchar(50) not null ,
                              email varchar(50) not null ,
                              block int(1))";
mysqli_query($con,$query);



//إنشاء جدول الصور  /*

$query="create table dep_image(id int(10) primary key auto_increment,
                              department_id int(10) not null ,
                              url varchar(50),
                              block int(1))";

mysqli_query($con,$query);






