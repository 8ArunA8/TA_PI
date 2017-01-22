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
				   <img src="images/detail2.jpg" alt="image" class="img-responsive">
					<h2>Ini 9 perasaan dokter ketika melakukan operasi yang tak kamu ketahui</h2>
					<p>Dokter ternyata juga mempunyai kegelisahan tersendiri. Apalagi saat mereka melakukan operasi. Selain seragam putih, dokter juga identik dengan muka tegasnya. Banyak keluarga pasien yang mengartikan ekspresi tersebut sebagai manusia tidak punya hati. Dokter sering dituduh tidak memahami bagaimana arti keselamatan seseorang bagi keluarga. Di balik semua itu, dokter ternyata juga mempunyai kegelisahan tersendiri. Apalagi saat mereka melakukan operasi. Berikut adalah rahasia dokter saat melakukan operasi yang banyak orang tidak tahu :
					</p>

					<p class="eget">1. Dokter tidak mengkategorikan dirinya sebagai 
					Tuhan Kesalahpahaman ini terjadi karena film-film yang sering kita tonton. Banyak adegan yang menayangkan betapa garangnya seorang dokter bedah dengan peralatan yang begitu banyaknya. Bahkan, ada yang mengatakan di tangan dokterlah, seorang nyawa manusia ditentukan. Kenyataannya, di ruang operasi, mereka sangat rendah hati dan kalem. Tetapi mereka juga bertanggung jawab penuh dengan pasien. 
					</p>

					<p class="eget">2. Tubuh manusia tidak seperti rak buku yang tertata rapi 
					Kenyataannya anatomi manusia tidak persis seperti yang diajarkan di buku sekolah atau kuliah. Arteri ternyata tidak berwarna merah. Pembuluh darah yang tidak berwarna biru atau saraf sebenannya tidak berwarna kuning. Lebih ngerinya lagi, banyak organ manusia yang tidak selalu berada di tempat yang seharusnya. Jadi kamu bisa bayangkan rumitnya seperti apa ketika dokter melakukan operasi terhadap pasien. 
					</p>

					<p class="eget">3. Dokter juga sering merasa was-was 
					Kamu bisa saja tidak menyadari kalau dokter bisa merasakan hal ini. Mungkin karena wajahnya tertutupi oleh masker dan badannya dibungkus dengan seragam hijau. Sebenarnya, banyak hal tidak terduga yang membuat dokter was-was saat mengambil keputusan di ruang operasi. Apakah harus memotong bagian organ tertentu atau membuang bagian yang lain? Itulah yang sering dihadapi oleh dokter di ruang operasi. 
					</p>

					<p class="eget"><b>4. Sangat takut jika salah mengambil organ atau memasukkan sesuatu ke dalam tubuh pasien
					Dokumen untuk proses operasi memang sangat rumit. Hal ini memang demikian karena untuk mencegah hal-hal di luar dugaan. Itulah kenapa persetujuan operasi harus ditandatangani oleh pihak keluarga pasien sebelum dokter melakukan pembedahan. Dokter juga sangat ketakutan ketika salah mengambil organ. Atau memasukkan cairan atau hal lainnya ke dalam tubuh pasien. 
					</p>

					<p class="eget">5. Orang dengan obesitas sangat susah untuk ditangani
					Dari semua jenis pasien, sebagian dokter mengatakan bahwa pasien dengan obesitas merupakan pasien yang susah ditangani. Alasannya adalah pasien jenis ini sering mengalami berbagai komplikasi. Mulai dari, diabetes, stroke, penyakit jantung, kolesterol tinggi, hipertensi, dan lain-lainnya. 
					</p>

					<p class="eget">6. Ruang operasi bukan panggung yang mengerikan 
					Tidak seperti adegan di sebuah sinetron dengan dialog yang kaku. Ruang operasi merupakan seperti ruang biasa lainnya. Sebagai pasien, memang tidak tahu apa saja yang dilakukan oleh dokter bedah. Ternyata, para dokter bisa melakukan operasi sambil mendengarkan aneka jenis musik. Jika kamu menganggap ruang operasi adalah mengerikan, kamu selama ini terlalu banyak nonton sinetron. 
					</p>

					<p class="eget">7. Pasien telanjang adalah hal biasa
					Dokter sudah terbiasa dengan banyak pasien. Jika mereka melihat pasien telanjang di ruang operasi, mereka tidak merasakan 'getaran' apapun. Bahkan mereka tidak peduli dengan hal tersebut. 
					</p>

					<p class="eget">8. Perban adalah aspek penting
					Bagi dokter, perban bukan hanya aksesoris untuk luka. Perban memang dipasang untuk alasan keamanan pasien. Bahkan, seorang dokter harus meneliti apakah pemasangan perban sudah tepat atau belum pasca operasi. 
					</p>

					<p class="eget"><i>9. Hal yang paling dibenci dokter adalah salah diagnosis</i> 
					Untuk mendapatkan diagnosis yang tepat, dokter menggunakan banyak peralatan. Bahkan uji dan tes diulangi beberapa kali untuk mendapatkan gambaran sang pasien. Salah diagnosis merupakan hal yang dibenci oleh dokter. Bahkan hal seperti ini merupakan ketakutan tersendiri bagi dokter. Tidak heran, dokter juga sering menggunakan beberapa gabungan teknologi canggih untuk memeriksa pasien.
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