<!DOCTYPE html>
<?php
session_start();
$_SESSION["message"] = "0";
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Login </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->

  
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (min-width: 560px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 650px;
      }
    }
  </style>
</head>

<body class="login-page" >

  <header>

      <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

              <!-- Form with header -->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!-- Header -->
                  <div class="form-header purple-gradient">
                    <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> تسجيل الدخول</h3>
                  </div>

                  <!-- Body -->
                  <form action="" method="post">
                  <div class="md-form">
                    <i class="fas fa-user prefix white-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control" name="user">
                    <label for="orangeForm-name"> اسم المستخدم </label>
                  </div>

            
                  <div class="md-form">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control" name="pass">
                    <label for="orangeForm-pass"> كلمة المرور </label>
                  </div>

                  <div class="text-center">
                    <button class="btn purple-gradient btn-lg" type="submit" name="log"> موافق </button>
                    <hr class="mt-4">
                    <div class="inline-ul text-center d-flex justify-content-center">
                      <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                      <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                      <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- Form with header -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Section -->


  </header>
  <!-- Main Navigation -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.js"></script>

  <!-- Custom scripts -->
  <script>

    new WOW().init();
</script>




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
