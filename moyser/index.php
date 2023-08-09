 

<script src="https=>//code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


<script src="https=>//secure.paytabs.sa/payment/js/paylib.js"></script>

<form action="do.php" id="payform" method="post">
  <span id="paymentErrors"></span>
  <div class="row">
    <label>Card Number</label>
    <input type="text" data-paylib="number" size="20">
  </div>
  <div class="row">
    <label>Expiry Date (MM/YYYY)</label>
    <input type="text" data-paylib="expmonth" size="2">
    <input type="text" data-paylib="expyear" size="4">
  </div>
  <div class="row">
    <label>Security Code</label>
    <input type="text" data-paylib="cvv" size="4">
  </div>
  <input type="submit" value="Place order">
</form>

<script type="text/javascript">
var myform = document.getElementById('payform');
paylib.inlineForm({
  'key'=> 'CHKMVP-GPTN6G-RM2QNV-RBK7MD',
  'form'=> myform,
  'autoSubmit'=> true,
  'callback'=> function(response) {
    document.getElementById('paymentErrors').innerHTML = '';
    if (response.error) {             
      paylib.handleError(document.getElementById('paymentErrors'), response); 
    }
  }
});
</script>