



<?php

$mony_to_pay_php=$_POST['package_price'];

$des_php=$_POST['des'];
$user_id=$_POST['user_id'];
 
$des_php=$des_php."user id=".$user_id;



?>


<input type="text" id="mony_to_pay" name="fname" value ="<?php echo $mony_to_pay_php;    ?>"  hidden>
<input type="text" id="des_php" name="fname" value ="<?php echo $des_php;    ?>"  hidden>
<br><br>



<head>
  <!-- Other Tags -->



  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>






  <!-- Moyasar Styles -->
  <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.7.3/moyasar.css" />

  <!-- Moyasar Scripts -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
  <script src="https://cdn.moyasar.com/mpf/1.7.3/moyasar.js"></script>

  <!-- Download CSS and JS files in case you want to test it locally, but use CDN in production -->
</head>








<div class="mysr-form"></div>
<script>


var mony_to_pay = $('#mony_to_pay').val();
var des_php= $('#des_php').val();



//alert(mony_to_pay);





  Moyasar.init({
    element: '.mysr-form',
    // Amount in the smallest currency unit.
    // For example:
    // 10 SAR = 10 * 100 Halalas
    // 10 KWD = 10 * 1000 Fils
    // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
    amount: mony_to_pay,
    currency: 'SAR',
    description:des_php,
    publishable_api_key: 'pk_test_EDdH3BPTMkHYycbCgphQ31zc1Xyu385zLttLFf4u',
    callback_url: 'https://wa.me/966568430828',
    methods: ['creditcard'],














    
  })
</script>



