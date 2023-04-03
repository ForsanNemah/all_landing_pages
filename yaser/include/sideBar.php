<aside id="sidebar mw-100" class="sidebar" >

  <ul class="sidebar-nav" id="sidebar-nav">
  <?php  

   $homePage=  '<li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
              <i class="bi bi-grid"></i>
              <span>Home</span>
          </a>
      </li><!-- End Home Nav -->';

     $customerPage='<li class="nav-item">
          <a class="nav-link collapsed" href="customer.php">
              <i class="bi bi-grid"></i>
              <span>Customers</span>
          </a>
      </li><!-- End customer Nav -->';

   $campaignPage='   <li class="nav-item">
          <a class="nav-link collapsed" href="campaign.php">
              <i class="bi bi-grid"></i>
              <span>Campaigns</span>
          </a>
      </li><!-- End campaign Nav -->';

    $marketerPage=' <li class="nav-item">
          <a class="nav-link collapsed" href="marketer.php">
              <i class="bi bi-grid"></i>
              <span>Marketers</span>
          </a>
      </li>';

    $userPage=' <li class="nav-item">
          <a class="nav-link collapsed" href="user.php">
              <i class="bi bi-grid"></i>
              <span>Users</span>
          </a>
      </li><!-- End Users Nav -->';
     $registerPage=' <li class="nav-item">
          <a class="nav-link collapsed" href="registers.php">
              <i class="bi bi-grid"></i>
              <span>Registers</span>
          </a>
      </li><!-- End Registers Nav -->';

if (isset($_SESSION['adminSession'])) {
   echo $homePage.$userPage.$customerPage.$campaignPage.$marketerPage.$registerPage;
}else if(isset($_SESSION['customerSession'])){
    echo $homePage.$campaignPage.$marketerPage.$registerPage;
}
else{
    echo $homePage.$campaignPage.$registerPage;
}

?>;

</ul>
</aside>