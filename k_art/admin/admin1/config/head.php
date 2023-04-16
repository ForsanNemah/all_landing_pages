<?php
session_start();
if($_SESSION["login"] =="1"){
	
}
else{
  header('location:../config/logout.php');
}

?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>إدارة الأقسام والمشاريع </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body dir="rtl">


<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="#">إدارة <span class="color-b">المشاريع </span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الادمن  </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="../admin/insert.php">إضافة ادمن  </a>
                        <a class="dropdown-item " href="../admin/admin.php">عرض الادمن  </a>

                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاقسام </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="../department/insert_dep.php">إضافة قسم  </a>
                        <a class="dropdown-item " href="../department/department.php">عرض الاقسام  </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="../projects/projects.php">المشاريع   </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../config/logout.php">تسجيل الخروج </a>
                </li>
            </ul>
        </div>


    </div>
</nav><!-- End Header/Navbar -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
