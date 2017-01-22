<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
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
										<li class="menu__item menu__item--current"><a href="home.html" class="menu__link"><span class="menu__helper">Home</span></a></li>
										<li class="menu__item"><a href="dokter.php" class="menu__link"><span class="menu__helper">Dokter</span></a></li>
										<li class="menu__item"><a href="fitur.php" class="menu__link"><span class="menu__helper">Fitur</span></a></li>
									
									</ul>
								</nav>
							</div>
					</div>
					
				</nav>

			</div>
	</div>
</div>
<!--//header-top-->
 <div class="single">
			<div class="container">
				<div class="article-post w3l">
				<div class="post-details s-page">
				   <img src="images/detail3.jpg" alt="image" class="img-responsive">
					<h2>Kisah Dokter dan Gadis Kecil di Ruang Operasi</h2>
					<p>Seperti lazimnya anak batita (bawah tiga tahun), mereka tidak nyaman jika harus berhadapan dengan dokter. Apalagi jika mereka di ruang operasi yang asing. Rata-rata anak akan merasa tak nyaman dan ketakutan.
					</p>

					<p class="eget">Namun apa yang dilakukan oleh dokter ini sungguh melelehkan hati para netizen. Baru-baru ini beredar foto di social media, seorang dokter yang berusaha menghibur anak perempuan yang ketakutan sebelum dioperasi.
					</p>

					<p class="eget">Bak pahlawan, foto dokter yang menghibur pasiennya yang berusia dua tahun ini menjadi viral, dishare oleh netizen selama seminggu kemarin. Dalam foto yang berseri tersebut, tampak seorang gadis kecil menangis gugup di ruang operasi sebuah rumah sakit di Zhejiang.
					</p>

					<p class="eget">Malangnya gadis tersebut sendirian, tak ditemani oleh orang tua atau kerabatnya. Melihat hal itu Shi Zhuo dokter ahli bedah ini mengambil inisiatif mencoba menenangkan bocah tersebut dengan menunjukkan video-video lucu di ponselnya.
					</p>

					<p class="eget">Rupanya, Dr Zhuo tahu benar bagaimana cara mengatasi gadis yang sedang ketakutan. Karena ia ternyata juga mempunyai anak perempuan yang kini berusia 6 tahun. Tak perlu waktu lama, gadis kecil tersebut berhenti menangis dan mulai tersenyum.
					</p>

					<p class="eget">“Di ruang operasi, dokter sering menghibur pasien baik dengan pelukan atau dan kata-kata, “kata dokter pada media setempat. “Treatment seperti ini adalah sesuatu yang sangat normal, tambahnya.
					Sebelumnya netizen juga dihebohkan dengan foto yang tak kalah mengharukan, seorang ayah yang merelakan dirinya basah kuyup di tengah hujan karena memayungi anak laki-lakinya.
					</p>

					<p class="eget">Kadang hal-hal kecil yang mudah kita lakukan bisa jadi berdampak besar terhadap orang lain.
					</p>

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