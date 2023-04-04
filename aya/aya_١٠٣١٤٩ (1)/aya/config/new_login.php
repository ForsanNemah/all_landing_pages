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

    <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
  </head>
  <body>


    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <form class="form-03-main" method="post" action="#">
                <div class="logo">
                  <img src="assets/images/user.png">
                </div>
                <div class="form-group">
                  <input type="text" name="user" class="form-control _ge_de_ol" type="text" placeholder="Enter UserName" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="pass" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

               

                <div class="form-group">
               
                      <button type="submit" class="_btn_04" name="log" value="log"> تسجيل الدخول </button>
                  
            
                </div>
                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <li><i class="fa fa-facebook"></i></li>
                      <li><i class="fa fa-twitter"></i></li>
                      <li><i class="fa fa-google-plus"></i></li>
                      <li><i class="fa fa-instagram"></i></li>
                      <li><i class="fa fa-linkedin"></i></li>
                    </ol>
                  </div>
                </div>
              </form>



            </div>
          </div>
        </div>
      </div>
    </section>

    

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













