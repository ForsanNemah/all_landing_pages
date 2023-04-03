<?php
session_start();
?>
<?php
if (isset($_SESSION['adminSession'])||isset($_SESSION['marketerSession'])||isset($_SESSION['customerSession'])) {

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registers / Data </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
    /* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background:  rgb(0, 89, 255);
  border-radius: 10px;
}
</style>
<body>

    <!-- ======= Header ======= -->
    <?php include('include/navbar.php'); ?>

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('include/sideBar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Register</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Register</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body mt-2">
                <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#edit-Register-modal'><i class="ri-refresh-fill">Update</i></button>
                <button type="button" class="btn btn-info"  data-toggle='modal'  data-target='#userViewModal' id="btnView" ><i  class="ri-eye-line">View</i></button> 
                <button type="button" class="btn btn-danger" id="btndelete"><i class="bi bi-trash"></i>Delete</button>
                <button type="button" class="btn btn-secondary"><i class="ri-printer-line">Report</i></button>
                <button type="button" class="btn btn-info" id="btnRefresh"><i class="ri-refresh-line">Refresh</i></button>
                </i></button>
            </div>
        </div>
        <!-- End button nav -->
        <section class="section" style="display: block;" id="table">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Registers Data</h5>
                            <div id="admins_list" class="table-responsive">
                                <!-- Table with dta came from ajax -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="modal" id="userViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="mb-3 row"  >
                    <label for="" class="col-lg-4">Name</label>
                    <p id="view_name" class="form-control col-lg-4"></p>
                </div>
                <div class="mb-3">
                    <label for="">customer</label>
                    <p id="view_customer" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">campaign</label>
                    <p id="view_campaign" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">service</label>
                    <p id="view_service" class="form-control"></p>
               </div>
               <div class="mb-3">
                    <label for="">information</label>
                    <p id="view_info" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">source</label>
                    <p id="view_source" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">phone</label>
                    <p id="view_phone" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">marketer</label>
                    <p id="view_marketer" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">register Date</label>
                    <p id="view_reg" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Note</label>
                    <p id="view_note" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">register state</label>
                    <p id="view_state" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Close</button>  
            </div>
        </div>
    </div>
</div>
        <!-- The Modal -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Uni code</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Page Script -->
    <script src="register/js/Registerscript.js"></script>
    <script src="login/js/logout.js"></script>




</body>

</html>
<?php
}else{
    header("location:login.html");
}
?>