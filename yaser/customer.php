<?php
session_start();
?>
<?php 
if (!isset($_SESSION['adminSession'])) {
   header("location:login.html");
} 
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customers / Data </title>
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
      <h1>Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item" ><a href="index.html">Home</a></li>
          <li class="breadcrumb-item" >Customer</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
      <div class="card-body mt-2">
        <button type="button" class="btn btn-success"  data-toggle='modal' data-target='#add-customer-modal'><i class="bi bi-person-plus-fill">Add customer</i></button>
        <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#edit-Customer-modal' ><i class="ri-refresh-fill">Update</i></button>
        <button type="button" class="btn btn-danger" id="btndelete"><i class="bi bi-trash"></i>Delete</button>
        <button type="button" class="btn btn-secondary"><i class="ri-printer-line">Report</i></button>
        <button type="button" class="btn btn-info" id="btnRefresh"><i class="ri-refresh-line">Refresh</i></button>
        </i></button>
      </div>
    </div>
    <!-- End button nav -->
    <section class="section" style="display: block;" id="table">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customers Data</h5>
              <div id="admins_list" class="table-responsive">
              <!-- Table with dta came from ajax -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
 
  <!-- The Modal -->
	<div class="modal" id="edit-Customer-modal">
    <div class="modal-dialog">
      <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit Customer</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="customer/php//updateCustomer.php" id="edit-form">
              <input class="form-control" type="hidden" name="id">
           
            <div class="form-group">
              <label for="first_name">Name</label>
              <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
              <label for="last_name">Password</label>
              <input class="form-control" type="text" name="password">
            </div>
            <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Update</button>
            <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Close</button>
        </form>


          </div>

      </div>
    </div>
</div>


<div class="modal" id="add-customer-modal">
  <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
			    <form action="customer/php/saveCustomer.php" id="addform">
				  	<div class="form-group">
					    <label for="name">Name</label>
					    <input class="form-control" type="text" name="name" id="name">
              <small></small>
				  	</div>
				  	<div class="form-group">
					    <label for="password">passworde</label>
					    <input class="form-control" type="text" name="password" id="password">
              <small></small>
				  	</div>
				  	<div class="form-group">
					    <label for="re-password">Re-enter password</label>
					    <input class="form-control" type="text" name="re-password"  id="confirm-password"></input>
              <small></small>
				  	</div>
				  	<button type="button" class="btn btn-primary" id="SaveData">Save</button>
            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
				</form>
        </div>
    </div>
  </div>
</div>
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
  <script src="customer/js/Customerscripts.js"></script>
  <script src="login/js/logout.js"></script>




</body>

</html>