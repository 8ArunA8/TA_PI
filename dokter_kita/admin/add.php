<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Project      : Data Karyawan CRUD MySQLi (Create, read, Update, Delete) PHP, MySQLi dan Bootstrap
Author		 : Hakko Bio Richard, A.Md
Website		 : http://www.niqoweb.com
Blog         : http://www.acchoblues.blogspot.com
Email	 	 : hakkobiorichard[at]gmail.com
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="http://www.hakkoblogs.com">Data User</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="http://www.hakkoblogs.com">Data User</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Master Data</a></li>
					<li class="active"><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data User &raquo; Tambah Data</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				
				$username		 = $_POST['username'];
				$email		     = $_POST['email'];
                $tinggi_badan	 = $_POST['tinggi_badan'];
                $berat_badan	 = $_POST['berat_badan'];
				$no_telepon		 = $_POST['no_telepon'];
				$status			 = $_POST['status'];
				$pass1	         = $_POST['pass1'];
				$pass2           = $_POST['pass2'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM tbl_users WHERE user_id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = md5($pass1);
						$insert = mysqli_query($koneksi, "INSERT INTO tbl_users ( username, email, tinggi_badan, berat_badan, no_telepon,  password)
															VALUES('$username', '$email', '$tinggi_badan', '$berat_badan', '$no_telepon',  '$pass')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Baru Berhasil Di Simpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Baru Gagal Di simpan !</div>';
						}
					} else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password Tidak sama !</div>';
					}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
				}
			}
			?>
			
			<form class="form-horizontal" action="" method="post">
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Lengkap</label>
					<div class="col-sm-3">
						<input type="text" name="usrname" class="form-control" placeholder="Nama" required>
					</div>
				</div>								
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-3">
						<input type="text" name="email" class="form-control" placeholder="Nama" required>
					</div>
				</div>	
                <div class="form-group">
					<label class="col-sm-3 control-label">Tinggi Badan</label>
					<div class="col-sm-2">
						<input type="text" name="tinggi_badan" class="form-control" placeholder="Cm" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Berat Badan</label>
					<div class="col-sm-2">
						<input type="text" name="Berat_badan" class="form-control" placeholder="Kg" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Umur</label>
					<div class="col-sm-2">
						<input type="text" name="umur" class="form-control" placeholder="Tahun" required>
					</div>
				</div>
                
				<div class="form-group">
					<label class="col-sm-3 control-label">No Telepon</label>
					<div class="col-sm-2">
						<input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required>
					</div>
				</div>                
				<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ulangi Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass2" class="form-control" placeholder="Ulangi Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
						<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>