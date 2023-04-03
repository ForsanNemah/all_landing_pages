<?php
session_start();
?>
<?php 
if (isset($_SESSION['adminSession'])||isset($_SESSION['marketerSession'])||isset($_SESSION['customerSession'])) {
      
    if(isset($_SESSION['marketerSession'])){
        $marketerId=$_SESSION['marketerId'];
      }
     
    ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Campaigns / Data </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
            <h1>Campaign</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Campaign</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body mt-2 pt-sm-2">
            <?php
        if(!isset($_SESSION['marketerSession'])){ ?>
                <button type="button" class="btn btn-success p-" data-toggle='modal'   data-target='#add-Campaign-modal' id="btnaddcampaign"><i
                        class="bi bi-person-plus-fill">Add Campaign</i></button>
                <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#edit-Campaign-modal'><i
                        class="ri-refresh-fill">Update</i></button>
                <button type="button" class="btn btn-danger" id="btndelete"><i
                        class="bi bi-trash"></i>Delete</button>
                        <?php } ?>
                <button type="button" class="btn btn-info"  data-toggle='modal'  data-target='#userViewModal' id="btnView" ><i  class="ri-refresh-line">View</i></button> 
                <button type="button" class="btn btn-secondary"><i class="ri-printer-line">Report</i></button>
                <button type="button" class="btn btn-info" id="btnRefresh"><i
                        class="ri-refresh-line">Refresh</i></button>
                </i></button>

            </div>
        </div>
        <!-- End button nav -->
        <section class="section" style="display: block;" id="table">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 col-sm-12 col-md-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Campaigns Data</h5>
                            <div id="admins_list" class="table-responsive" >
                                <!-- Table with dta came from ajax -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- The Modal -->
        <div class="modal" id="edit-Campaign-modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Campaign</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="row g-3" action="campaign/php/updateCampaign.php" id="edit-form">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Campagin Name" name="name">
                                    <label for="floatingName">campaign </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Campagin link" name="link">
                                    <label for="floatingName">campaign Link </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="inputDate" class=" col-form-label"> Start Date</label>
                                        <div class="col-sm-10">
                                            <input type="date"  class="form-control" name="start_date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="inputDate" class=" col-form-label">Exp. Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" value="uu" name="exp_date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="platform" aria-label="State">
                                        <option value="instgram" selected>instgram</option>
                                        <option value="facebook">facebook</option>
                                        <option value="twiter">twiter</option>
                                    </select>
                                    <label for="floatingSelect">platform</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" placeholder="daily Exchange"
                                    aria-label="Amount (to the nearest dollar)" name="daily_exch">
                                <span class="input-group-text">.00</span>
                            </div>

                            <div >
                            <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Update</button>
                            <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Close</button>  
                           </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>


        <div class="modal" id="add-Campaign-modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Campaign</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- Add Campaign Form -->
                        <form class="row g-3" action="campaign/php/saveCampaign.php" id="addcampaign">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Campagin Name" name="name" id="campaignname">
                                    <label for="floatingName">campaign </label>
                                    <small></small>
                                </div>
                            </div>
                         <?php  if(isset($_SESSION['adminSession'])){
                         ?><div class="col-md-12">
                            <div class="form-floating mb-3" id="select-customer">
                                    <!-- customerlist come from ajax  -->
                                    <label for="floatingSelect">customer</label>
                                    </div>
                                </div>
                         <?php
                            }
                             if(isset($_SESSION['customerSession'])){
                         ?>
                            <input class="form-control" type="hidden" name="customer" value="<?php echo $_SESSION['customerId'] ?>">
                        
                           <?php } ?>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Campagin link" name="link" id="link">
                                    <label for="floatingName">campaign Link </label>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="inputDate" class=" col-form-label"> Start Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="start_date">
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="inputDate" class=" col-form-label">Exp. Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="exp_date" id="exp_date">
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="platform" aria-label="State">
                                        <option value="instgram" selected>instgram </option>
                                        <option value="facebook">facebook</option>
                                        <option value="twiter">twiter</option>
                                    </select>
                                    <label for="floatingSelect">platform</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" placeholder="daily Exchange"
                                    aria-label="Amount (to the nearest dollar)" name="daily_exch" id="daily_exch">
                                <span class="input-group-text">.00</span>
                                <small></small>
                            </div>

                            <div class="text-center">
                                <button type="button" id="SaveData" class="btn btn-primary">send</button>
                            </div>
                        </form><!-- End  Add Campaign Form-->
                    </div>

                </div>
            </div>
        </div>
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
                    <label for="">platform</label>
                    <p id="view_platform" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">daily exchange</label>
                    <p id="view_daily" class="form-control"></p>
               </div>
               <div class="mb-3">
                    <label for="">Link</label>
                    <p id="view_link" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">start Date</label>
                    <p id="view_start" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Expair date </label>
                    <p id="view_expair" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">state</label>
                    <p id="view_state" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">registers</label>
                    <p id="view_registers" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Close</button>  
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
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
<script src="campaign/js/Campaignscript.js" ></script>
<script src="login/js/logout.js"></script>


</body>

</html>
<?php } 

else{
  header("location:login.html");
}
?>