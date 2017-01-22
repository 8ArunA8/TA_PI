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
				   <img src="images/detail4.jpg" alt="image" class="img-responsive">
					<h2>Tim Dokter Indonesia Sukses Operasi Transplantasi Hati</h2>
					<p>Setelah 15 jam operasi lamanya, tim dokter sukses melakukan operasi ganti hati pada pasien bernama Hafidz (7).  Operasi yang sukses selesai dilakukan pada Senin (24/2) kemarin pada pukul 23.45 WIB, oleh tim dokter yang terdiri atas tim RS Pertamedika Pusat, RS Pertamedika Sentul City, RS Dr Soetomo Surabaya, RS Hasan Sadikin Bandung dan RS Cipto Mangunkusumo Jakarta.
					</p>

					<p class="eget">Hafidz adalah penderita kanker hati yang berusia 7 tahun. Sebagai pasien transplantasi liver pertama di Indonesia, Hafidz merupakan salah satu pasien beruntung dari keluarga yang kurang mampu secara ekonomi. Pasalnya dengan biaya operasi dan pasca perawatan sebesar Rp.1,6 miliar, seluruh biaya operasi yang ada didukung penuh oleh para dermawan yang disalurkan melalui manajemen RS Pertamedika Sentul City.
					</p>

					<p class="eget">Kesuksesan ini tidak luput dari campur tangan dari Menteri BUMN, Dahlan Iskan dan Prof. dr. Koichi Tanaka, ahli transplantasi yang sudah memiliki reputasi di kancah medis dunia internasional  dari Kyoto University Hospital, Jepang. Karena selain memimpin jalannya operasi, kehadiran Prof. dr. Koichi Tanaka sekaligus menjadi momentum tujuan pendidikan kedokteran Indonesia.
					</p>

					<p class="eget">Dahlan Iskan yang membantu menghubungkan manajemen RS Pertamedika Sentul City dengan beberapa RS dan universitas terkemuka di Indonesia sebagai sponsor dalam operasi tersebut. Dahlan sendiri pernah menjalani operasi transplantasi hati pada tahun 2006 di Tianjin Hospital, Tiongkok. Operasi transplantasi Dahlan sukses dilakukan tim dokter setempat, setelah sebelumnya berguru pada Prof. dr. Koichi Tanaka. Figur Prof Tanaka memang dikenal sebagai pengajar dan pelatih dokter-dokter lain di negara-negara Singapura, Mesir, dan Arab Saudi.
					</p>

					<p class="eget">RS Pertamedika Sentul City sendiri adalah rumah sakit berplat merah yang telah dirancang khusus untuk mengangani pasien liver dan jantung di Indonesia. Berbeda dengan RS pada umumnya, rancangan RS ini berdasarkan kemudahan penanganan pasien, karena seluruh alat-alat kesehatan yang berstandar internasional yang ada berada dalam satu blok sehingga pasien tidak perlu dipindah-pindahkan dari ruang ke ruang lainnya, jauh berbeda pada konsep konvensional pasien yang mendatangi alat pendukung.
					</p>

					<p class="eget">Kini tercapai sudah cita-cita Dahlan Iskan, Indonesia terbukti membuktikan kemampuannya dalam dunia medis untuk proses transplantasi hati. Kini Hafidz dalam proses pemilihan pasca operasi, demikian juga pendonor hati untuk Hafidz, ayahnya sendiri, Sugeng Kartika (45) setelah sukses melalui proses pemotongan hati.
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