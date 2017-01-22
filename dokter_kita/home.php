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
<title>Welcome - <?php echo $userRow['email']; ?></title>
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
    

<div class="main-header" id="house">
    <div class="header-strip">
        <div class="container">
				<p class="location"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="home.php">&nbsp; <?php echo $userRow['username']; ?></a></p>
                   
                <div class="social-icons">
					<ul>					
						<p class="location"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp; <a href="logout.php?logout">Logout</a></p> 										
					</ul>    
            </div>
        </div>
    </div>
</div>
    

</head>
<body>
<!--home-->
				<!--header-atas-->
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
					<!-- /.navbar-collapse -->
				</nav>

			   <div class="clearfix"></div>
			</div>
	</div>
<!--//header-top-->
 <!-- //Line Slider -->
	 <div class="top_banner">
		<!-- SVG Arrows -->
		<div class="svg-wrap">
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-left" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
			</svg>
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-right" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
			</svg>
		</div>
		
		<div class="sleekslider">
			<!-- Slider Pages -->
			<div class="slide active bg-1">
				<div class="slide-container">
					<div class="slide-content">
						<p>Selamat Datang di <span class="s-p">DOKTER KITA</span>!</p>	
					</div>

				</div>
			</div>
			<div class="slide bg-2">
				<div class="slide-container">
					<div class="slide-content">
						<p>Selamat Datang di <span class="s-p">DOKTER KITA</span>!</p>

					</div>
				</div>				
			</div>
			<div class="slide bg-3">
				<div class="slide-container">
					<div class="slide-content">
						<p>Selamat Datang di <span class="s-p">DOKTER KITA</span>!</p>	

					</div>
				</div>				
			</div>
			<div class="slide bg-4">
				<div class="slide-container">
					<div class="slide-content">
					<p>Selamat Datang di <span class="s-p">DOKTER KITA</span>!</p>	

					</div>
				</div>				
			</div>
			<div class="slide bg-5">
				<div class="slide-container">
					<div class="slide-content">
					<p>Selamat Datang di <span class="s-p">DOKTER KITA</span>!</p>	

					</div>
				</div>				
			</div>

			<!-- Navigation Arrows with Thumbnails -->
			<nav class="nav-split">
				<a class="prev" href="">
					<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-left" /></svg></span>
					<div>
						<h3>test</h3>
						<img alt="Previous thumb"/>
					</div>
				</a>
				<a class="next" href="">
					<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-right" /></svg></span>
					<div>
						<h3>test</h3>
						<img alt="Next thumb"/>
					</div>
				</a>
			</nav>

			<!-- Pagination -->
			<nav class="pagination">
				<span class="current"></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</nav>

			<!-- Navigation Tabs -->
			<nav class="tabs">
				<div class="tab-container">
					<ul>
						<li class="current"><a href="#"><span>01</span> Gambar</a></li>
						<li><a href="#"><span>02</span> Gambar</a></li>
						<li><a href="#"><span>03</span> Gambar</a></li>
						<li><a href="#"><span>04</span> Gambar</a></li>
						<li><a href="#"><span>05</span> Gambar</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- JavaScripts -->
		<script type="text/javascript" src="js/sleekslider.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
      <!--welcome-->
 </div>

        <!-- /Line Slider -->
	</div>
    <!--footer-->
	
		<!-- Services -->
		<div class="services" id="services">
			<div class="container">

				
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Air Kelapa Muda</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Madu</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Coklat</a></li>
							<li role="presentation"><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">Susu Kedelai</a></li>
							<li role="presentation"><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">Rebung</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
								<div class="col-md-5 col-sm-5 tab-image">
									<img src="images/1.jpg" alt="Medicinal">
								</div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>Air Kelapa Muda adalah bahan makanan atau bahan minuman yang biasa dikonsumsi oleh masyarakat Indonesia.  Air Kelapa Muda mengandung energi sebesar 17 kilokalori, protein 0,2 gram, karbohidrat 3,8 gram, lemak 0,1 gram, kalsium 15 miligram, fosfor 8 miligram, dan zat besi 0 miligram.  Selain itu di dalam Air Kelapa Muda juga terkandung vitamin A sebanyak 0 IU, vitamin B1 0 miligram dan vitamin C 1 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Air Kelapa Muda, dengan jumlah yang dapat dimakan sebanyak 100 %.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								<div class="col-md-5 col-sm-5 tab-image">
									<img src="images/2.jpg" alt="Medicinal">
								</div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>Madu adalah bahan makanan atau minuman yang biasa dikonsumsi oleh masyarakat Indonesia.  Madu mengandung energi sebesar 294 kilokalori, protein 0,3 gram, karbohidrat 79,5 gram, lemak 0 gram, kalsium 5 miligram, fosfor 16 miligram, dan zat besi 1 miligram.  Selain itu di dalam Madu juga terkandung vitamin A sebanyak 0 IU, vitamin B1 0 miligram dan vitamin C 4 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Madu, dengan jumlah yang dapat dimakan sebanyak 100 %.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
								<div class="col-md-5 col-sm-5 tab-image">
									<img src="images/3.jpg" alt="Medicinal">
								</div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>Coklat adalah bahan makanan yang biasa dikonsumsi oleh masyarakat Indonesia.  Coklat mengandung energi sebesar 472 kilokalori, protein 2 gram, karbohidrat 0 gram, lemak 0 gram, kalsium 63 miligram, fosfor 0 miligram, dan zat besi 2,8 miligram.  Selain itu di dalam Coklat juga terkandung vitamin A sebanyak 30 IU, vitamin B1 0,03 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Coklat, dengan jumlah yang dapat dimakan sebanyak 100 %.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
								<div class="col-md-5 col-sm-5 tab-image">
									<img src="images/4.jpg" alt="Medicinal">
								</div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>Susu Kedelai adalah bahan makanan serta minuman yang biasa dikonsumsi oleh masyarakat Indonesia.  Susu Kedelai mengandung energi sebesar 41 kilokalori, protein 3,5 gram, karbohidrat 5 gram, lemak 2,5 gram, kalsium 50 miligram, fosfor 45 miligram, dan zat besi 1 miligram.  Selain itu di dalam Susu Kedelai juga terkandung vitamin A sebanyak 200 IU, vitamin B1 0,08 miligram dan vitamin C 2 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Susu Kedelai, dengan jumlah yang dapat dimakan sebanyak 100 %.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="trekking" aria-labelledby="trekking-tab">
								<div class="col-md-5 col-sm-5 tab-image">
									<img src="images/5.jpg" alt="Medicinal">
								</div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>Rebung adalah bahan makanan nabati yang biasa dikonsumsi oleh masyarakat Indonesia.  Rebung mengandung energi sebesar 27 kilokalori, protein 2,6 gram, karbohidrat 5,2 gram, lemak 0,3 gram, kalsium 13 miligram, fosfor 59 miligram, dan zat besi 1 miligram.  Selain itu di dalam Rebung juga terkandung vitamin A sebanyak 20 IU, vitamin B1 0,15 miligram dan vitamin C 4 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Rebung, dengan jumlah yang dapat dimakan sebanyak 65 %.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- //Services -->
		
			<div class="grid_2" id="tender">
   	 <div class="container">
	       <div class="sub-hd">
						<h3 class="tittle">CERITA <span>SUKSES</span></h3>
					</div>
   	  <div class="box_1 one">
   	 	<div class="col-md-6">
   	 	       <div class="col_1_of_2 span_1_of_2 multi-gd-text">
				   <a href="detail_1.php"><img src="images/n5.jpg" class="img-responsive" alt=""></a>
				   <div class="story_desc">
				   	  <h3>Dr. Olivia Ong, dipl. AAAM</h3>
				   	  <p>JAKARTA AESTHETIC CLINIC</p>
				   </div>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h4>Suka Menolong, Dokter Cantik Ini Sukses Menginspirasi</h4>
				   <p class="p1">Cantik, muda, sukses. Tiga kata ini layak disematkan pada dokter cantik ini. Siapa tidak kenal dengan dokter Olivia Ong. Dokter kecantikan sekaligus pemilik Jakarta Aestetic Clinic (JAC) ini sukses menginspirasi wanita Indonesia.</p>
 				</div>
				<div class="clearfix"></div>
		</div>
   	 	<div class="col-md-6">
   	 	      <div class="col_1_of_2 span_1_of_2 multi-gd-text">
				   <a href="detail_2.php"><img src="images/n6.jpg" class="img-responsive" alt=""></a>
				   <div class="story_desc">
				   	  <h3>Perasaan Dokter</h3>
				   	  <p>Dokter Indonesia</p>
				   </div>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h4>Ini 9 perasaan dokter ketika melakukan operasi yang tak kamu ketahui</h4>
				   <p class="p1">Dokter ternyata juga mempunyai kegelisahan tersendiri. Apalagi saat mereka melakukan operasi. Selain seragam putih, dokter juga identik dengan muka tegasnya.</p>
 				</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
   	  </div>
   	  <div class="box_2">
   	 	<div class="col-md-6">
   	 	       <div class="col_1_of_2 span_1_of_2 multi-gd-text">
				   <a href="detail_3.php"><img src="images/n1.jpg" class="img-responsive" alt=""></a>
				   <div class="story_desc">
				   	  <h3>DR Shi Zhuo</h3>
				   	  <p>RS Zhejiang</p>
				   </div>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h4>Kisah Dokter dan Gadis Kecil di Ruang Operasi</h4>
				   <p class="p1">Seperti lazimnya anak batita (bawah tiga tahun), mereka tidak nyaman jika harus berhadapan dengan dokter. Apalagi jika mereka di ruang operasi yang asing. Rata-rata anak akan merasa tak nyaman dan ketakutan.</p>
 				</div>
				<div class="clearfix"></div>
		</div>
   	 	<div class="col-md-6">
   	 	      <div class="col_1_of_2 span_1_of_2 multi-gd-text">
				   <a href="detail_4.php"><img src="images/n3.jpg" class="img-responsive" alt=""></a>
				   <div class="story_desc">
				   	  <h3>Dokter Indoneia</h3>
				   	  <p>Dokter Indonesia</p>
				   </div>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h4>Tim Dokter Indonesia Sukses Operasi Transplantasi Hati</h4>
				   <p class="p1">Setelah 15 jam operasi lamanya, tim dokter sukses melakukan operasi ganti hati pada pasien bernama Hafidz. Operasi yang sukses selesai dilakukan pada Senin (24/2) kemarin pada pukul 23.45 WIB</p>
 				</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
   	  </div>
   	 </div>
   </div>
		<!--//team-->
			
   
   <!--/reviews-->
	<div id="review" class="testimonials-review">
		<div class="container">
		<div class="sub-hd">
						<h3 class="tittle lost">BEST <span>HISTORY</span></h3>
					</div>
				<div class="testimonials">
				  <div class="monials">
				      <!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							 <!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->
						       <div id="owl-demo" class="owl-carousel">
					                   <div class="item-owl">

                                            <p class="speech">Rumah sakit dan kuburan dipenuhi dengan orang-orang yang menolak untuk mengakui nilai-nilai moralitas fisik.</p>
                                            <div class="client-info">
                                                <img src="images/t1.jpg" alt=" " />

                                                <h4>Dr Ron Spallone</h4>
                                            </div>
                                        </div><!-- /.item -->
					                     <div class="item-owl">

                                            <p class="speech">Hidup tidak hanya sekedar untuk hidup, tapi untuk menjadi baik</p>
                                            <div class="client-info">
                                                <img src="images/t2.jpg" alt=" " />

                                                <h4>Marcel Proust</h4>
                                            </div>
                                        </div><!-- /.item -->
					                      <div class="item-owl">
										  <p class="speech">Penyakit adalah hal yang paling diperhatikan dokter. Saran kebaikan dan kebijaksanan hanya membuat kita berjanji-jani saja. Namun rasa sakitlah yang kita menjadi taat.</p>
                                            <div class="client-info">
                                                <img src="images/t3.jpg" alt=" " />

                                                <h4>Lecky Han</h4>
                                                <span>Jenis Penyakit</span>
                                            </div>
                                        </div><!-- /.item -->
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--//reviews-->
	<!--/start-footer-section-->
		
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