<!DOCTYPE HTML>
<html lang="en">
<head>





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">














<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="html, css bootstrap, mega menu, navbar, large dropdown, menu CSS examples" />
	<meta name="description" content="Bootstrap 5 navbar megamenu examples with simple css demo code" />  

	<title>Demo - Bootstrap navbar megamenu dropdown. html code example </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<style type="text/css">
.navbar .megamenu{ padding: 1rem; }
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	
	.navbar .has-megamenu{position:static!important;}
	.navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
	
}	
/* ============ desktop view .end// ============ */


/* ============ mobile view ============ */
@media(max-width: 991px){
	.navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
		overflow-y: auto;
	    max-height: 90vh;
	    margin-top:10px;
	}
}
/* ============ mobile view .end// ============ */
</style>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 
	// DOMContentLoaded  end
</script>

</head>
<body dir="rtl">

	 

 

<!-- ============= COMPONENT ============== -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary"  dir="rtl">
<div class="container-fluid" dir="rtl">
	<a class="navbar-brand" href="#" dir="rtl" ></a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation" dir="rtl">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main_nav" dir="rtl">
		<ul class="navbar-nav">
			<li class="nav-item active"> <a class="nav-link" href="#">الرئيسية  </a> </li>
			<li class="nav-item"><a class="nav-link" href="#about"> من نحن  </a></li>
			<li class="nav-item"><a class="nav-link" href="#gols"> اهدافنا  </a></li>
			 
		</ul>
		 
	</div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->

		 

 
   <div id="main">

   <div class="row text-center">
  <img class="center-block" src="pics/header1.jpg" />
</div>

   </div>



   <div id="about">

<div class="row text-center">
<img class="center-block" src="pics/about.jpg" />
</div>

</div>











<div id="gols">

<div class="row text-center">
<img class="center-block" src="pics/g1.jpg" />
<img class="center-block" src="pics/g2.jpg" />
</div>

</div>



<div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            
            <p class="copyright">الجمعية الوطنية لطب الطوارئ والكوارث </p>
        </footer>
    </div> 

</body>
</html>

<style>


.navbar {
    padding-top: 0;
    margin-bottom: 50px;
    direction: rtl;
}


















.footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}

/* Credit to https://epicbootstrap.com/snippets/footer-basic */
</style>