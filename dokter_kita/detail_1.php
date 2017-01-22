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
										<li class="menu__item menu__item--current"><a href="home.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
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
				   <img src="images/6-our-clinic-9e4b3b031757698c1d19c91cedda00f1-1140x500-100-crop.jpg" alt="image" class="img-responsive">
					<h2>Suka Menolong, Dokter Cantik Ini Sukses Menginspirasi</h2>
					<p>Cantik, muda, sukses. Tiga kata ini layak disematkan pada dokter cantik ini. Siapa tidak kenal dengan dokter Olivia Ong. Dokter kecantikan sekaligus pemilik Jakarta Aestetic Clinic (JAC) ini sukses menginspirasi wanita Indonesia. Berawal dari bukan siapa-siapa, wanita yang pernah menempuh studi Estetika Medis di The American Academy of Aesthetic Medicine ini mampu membuktikan bahwa dirinya seorang wanita yang sukses berkarier dibidang kesehatan. Hal itu terbukti dengan berdirinya JAC di Kebayoran Jakarta.
					</p>

					<p class="eget">“Saya memulai praktik dari klinik kecil. Awalnya yang dua bed kini mencapai 17 bed. Tadinya ruangan praktik saya kecil kini kata orang ruangan praktik saya lega dan nyaman,” ungkap dr Olivia, kepada Okezone, di Jakarta belum lama ini.
					</p>

					<p class="eget">Lantas, bagaimana kisah dr Olivia bisa mencapai kesuksesan seperti saat ini? Kesuksesannya berawal mula dari kecintaannya suka menolong orang. Apa pun yang ia kerjakan selalu ingin bermanfaat bagi orang banyak. Hal inilah yang ia pelajari dari kedua orangtua untuk peduli terhadap sesama.</p>
					<p>“Kemudian, saya ingin tahu segala hal. Dan itu selalu lebih kritis dibandingkan anak seusia saya waktu itu,” kata wanita kelahiran Jakarta, 30 Januari 1981.
					</p>

					<p class="eget">Karena keinginan besarnya untuk menolong orang, lantas dr Olivia memutuskan untuk mengambil kuliah kedokteran setelah lulus SMA. Menurutnya, menjadi dokter, ia bisa menolong orang.
					</p>

					<p class="eget"><b>Di Universitas Katolik Atma Jaya, dr Olivia bukan mahasiswa biasa. Ia terkenal cerdas di setiap bidang mulai dari mata, kulit, bedah dan lainnya. Tak heran jika ia mendapatkan predikat sebagai lulusan terbaik di kampusnya.</b>
					</p>

					<p class="eget">Namun sayang, harapannya pupus saat keinginan menjadi dokter bedah tidak tercapai karena terkendala biaya. Namun, ia bertekad, meskipun tidak menjadi dokter bedah, ia tetap bisa melanjutkan keinginannya menolong orang. Salah satunya dengan menjadi dokter kecantikan.
					</p>

					<p class="eget">Tidak tanggung-tanggung, untuk mendalami dokter estetika, dr Olivia belajar hingga ke Swedia belajar dengan dokter-dokter bedah plastik terbaik dan beberapa negara lainnya untuk mendapatkan ilmu kedokterannya. Pantang menyerah dan memulai dari bawah yang membuat ia kini menjadi dokter yang sukses di bidang kecantikan.
					Tak hanya itu, baru-baru ini dr. Olivia juga ditunjuk sebagai satu-satunya dokter dari Asia yang diminta khusus untuk memperlihatkan teknik menyuntik yang baik dan benar di sekira 1200 peserta (dokter estetika) dari Asia Pacifik pada perhelatan besar International Master Course on Aging Skin (IMCAS) 2015 di Bali.
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