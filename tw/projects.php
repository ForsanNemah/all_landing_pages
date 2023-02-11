<!DOCTYPE html>
<html lang="en">
<head>
<title>Techworx</title>
<?php include 'include/head-link.html';  ?>
</style>
</head>
<body>
<!-- header -->
<?php include 'include/header.html';  ?>
<!-- end header -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Projects Details</li>
        </ol>
        <h2>Projects Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <!--table project  -->
<?php include 'tables_project.html';  ?>
    <!-- end table project -->
</main>
    <!-- footer -->
    <?php include 'include/footer.html';  ?>
    <?php include 'include/end-footer.html';  ?>
    <!-- end footer -->
    <script src="assets/js/ajax_jsonprojects.js"></script>
</body>
</html>