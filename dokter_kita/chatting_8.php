<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: home.html");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<html>
<head>
<title>Dokter Kita</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medicinal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/web-font-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
    <div class="main-header" id="house">
    <div class="header-strip">
        <div class="container">
				<p class="location"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">&nbsp; <?php echo $userRow['username']; ?></a></p>
                   
                <div class="social-icons">
					<ul>					
						<p class="location"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp; <a href="logout.php?logout">Logout</a></p> 										
					</ul>    
            </div>
        </div>
    </div>
</div>
<body>
<!--start-home-->

		<!--header-top-->
			<div class="header-top">
			  <div class="container">
					 <nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.html"><span>Dokter</span>Kita</a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <div class="top-menu">
							<nav class="menu menu--francisco">
									<ul class="nav navbar-nav menu__list">
										<li class="menu__item"><a href="home.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
										<li class="menu__item"><a href="dokter.php" class="menu__link"><span class="menu__helper">Dokter</span></a></li>
										<li class="menu__item"><a href="fitur.php" class="menu__link"><span class="menu__helper">Fitur</span></a></li>
										
									</ul>
								</nav>
							</div>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

			   <div class="clearfix"></div>
			</div>
	</div>
</div>
<!--//header-top-->
 <!-- //Line Slider -->
		<div class="top_banner two">
			<div class="container">
			       <div class="sub-hd-inner">
						<h3 class="tittle">Chatting</h3>
					</div>
			</div>
		</div>
	<!--/contact-->		
   <div class="main-textgrids">
				 		<div class="container">
				 			<div class="col-md-5 ab-pic">
				 					<img src="images/8dkr.jpg" alt=" " />

				 			</div>
				 			<div class="col_1_of_2">
				  <h4 class="text-blue title-border mb-30 bars">Biodata Dokter</h4>
								<ul class="ab">
									<li><a>Nama : Boni Dogiku</a></li>
                                    <li><a>Tanggal Lahir : 22 Januari 1971</a></li>
                                    <li><a>Tinggi Badan : 165 Cm</a></li>
                                    <li><a>Berat Badan : 70 Kg</a></li>
									<li><a>Bekerja : Rumah Sakit Kali Indah Semarang</a></li>
									<li><a>Alamat : Jl. Yuliana no : 14</a></li>
                                    <li><a>Pekerjaan : Dokter</a></li>
                                    <li><a>Instagram : -</a></li>
                                    
								</ul>
				 			</div>
       
		<div class="contact-top">
		    <div class="container">
				  
				<div class="contact-form">
					     <form method="post" action="#" class="right_form">
					  
					    <form class="right_form">
								<div>					    	
									<span><label>Chat</label></span>
									<span><textarea name="userMsg"> </textarea></span>
								</div>
							   <div>
									<span><input type="submit" value="KIRIM" class="myButton"></span>
							  </div>
					    </form>
					    <div class="clearfix"></div>
				  </div>
			</div>
		</div>
    </div>
         </div>
	<!--//contact-->	

	  
	<!--//end-footer-section-->
	<!--//footer-->
	<div class="footer-bottom">
		<div class="container">
			<p>© 2016 Dokter Kita</p>
		</div>
	</div>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script src="js/bootstrap.js"></script>

</body>
</html>