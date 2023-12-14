


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a target="_self" href="index_w_app.php" class="float" target="_blank" id="w_app_id">
<i class="fa fa-whatsapp my-float"></i>
</a>




<style>



.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}


</style>



<script type="text/javascript">

 var phn="<?=$phn?>";
    document.getElementById("w_app_id").href="https://wa.me/"+phn; 
  
//alert(phn);

</script>

 