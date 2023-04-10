<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style_login.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>

    <section class="form-02-main" style="height: 750px;" >
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <form class="form-03-main" method="post" action="#">
                <div class="logo">
                  <img src="assets/images/user.png">
                </div>
                <div class="form-group">
                  <input type="text" name="id" class="form-control _ge_de_ol" type="text" placeholder="ادخل رقم المستخدم" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="pass" class="form-control _ge_de_ol" type="text" placeholder="ادخل كلمة المرور" required="" aria-required="true">
                </div>
                
                <div class="form-group">
               
                      <button type="submit" class="_btn_04" name="log" value="log"> تسجيل الدخول </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
if(isset($_POST['log'])){
include "connection.php";
    $user_name= $_POST['id'];
    $pass=$_POST['pass'];
    $query= "SELECT * FROM admins WHERE id='$user_name' AND password ='$pass'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)!= 0)
    {
          $_SESSION["message"] = "";
        header('location:../admin/admin.php');
    }
    else {
      header('location:new_login.php');
    
    }
}
?>
</body>
</html>













