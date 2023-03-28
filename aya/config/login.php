<!DOCTYPE html>
<?php
session_start();
$_SESSION["message"] = "0";
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title> Log In</title>
    <title>دخول</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style_login.css"/>

</head>
<body dir="rtl ">
<header>


    <div id="intro" class="form_bg" style="width: 100%">
        <div class="mask d-flex align-items-center h-100" style=" width: 100%;background-color: rgba(0, 0, 0, 0.5);">
            <div class="container" >
                <div class="row">
                <form class="bg-white rounded shadow-5-strong p-5 form_horizontal" method="post" >

                    <div class="row justify-content-center form-group">

                            <!-- Email input -->
                            <div class=" form-group">
                                <input type="text" id="form1Example1" class="form-control" name="user" />
                                <label class="form-label" for="form1Example1">User Name</label>
                            </div>
                            <!-- Password input -->
                            <div class=" form-group">
                                <input type="password" id="form1Example2" class="form-control" name="pass" />
                                <label class="form-label" for="form1Example2">Password</label>
                            </div>
                            <button type="submit"  name="log" class="btn btn-primary btn-block">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</header>
<?php
if(isset($_POST['log'])){

    echo $_POST['user'];
    if($_POST['user']=="aaa" and    $_POST['pass']=="111" ){
        $_SESSION["message"] = "";
        header('location:../admin/admin.php');
    }
}
?>
</body>
</html>