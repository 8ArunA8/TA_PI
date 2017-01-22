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
					<li><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data User &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$nik = $_GET['nik'];
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_users WHERE user_id='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$user_id		 = $_POST['user_id'];
				$username	     = $_POST['username'];
				$email		     = $_POST['email'];				
				$tinggi_badan    = $_POST['tinggi_badan'];
                $berat_badan	 = $_POST['berat_badan'];
                $umur		     = $_POST['umur'];
				$no_telepon		 = $_POST['no_telepon'];
			
				
				$update = mysqli_query($koneksi, "UPDATE tbl_users SET username='$username',  email='$email', tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', umur='$umur', no_telepon='$no_telepon' WHERE user_id='$nik'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?user_id=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Lengkap</label>
					<div class="col-sm-3">
						<input type="text" name="username" value="<?php echo $row ['username']; ?>" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-3">
						<input type="text" name="email" value="<?php echo $row ['email']; ?>" class="form-control" placeholder="Email" required>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-3 control-label">Tinggi Badan (cm)</label>
					<div class="col-sm-3">
						<input type="text" name="tinggi_badan" value="<?php echo $row ['tinggi_badan']; ?>" class="form-control" placeholder="Tinggi Badan" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Berat Badan (kg)</label>
					<div class="col-sm-3">
						<input type="text" name="berat_badan" value="<?php echo $row ['berat_badan']; ?>" class="form-control" placeholder="Berat Badan" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Umur (tahun)</label>
					<div class="col-sm-3">
						<input type="text" name="berat_badan" value="<?php echo $row ['umur']; ?>" class="form-control" placeholder="Berat Badan" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No Telepon</label>
					<div class="col-sm-3">
						<input type="text" name="no_telepon" value="<?php echo $row ['no_telepon']; ?>" class="form-control" placeholder="No Telepon" required>
					</div>
				</div>
				
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">Jabatan</label>
					<div class="col-sm-2">
						<select name="jabatan" class="form-control" required>
							<option value=""> - Jabatan Terbaru - </option>
							<option value="Operator">Operator</option>
							<option value="Leader">Leader</option>
                            <option value="Supervisor">Supervisor</option>
							<option value="Manager">Manager</option>
						</select>
					</div>
                    <div class="col-sm-3">
                    <b>Jabatan Sekarang :</b> <span class="label label-success"><?php echo $row['jabatan']; ?></span>
				    </div>
				</div>-->
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-2">
						<select name="status" class="form-control">
							<option value="">- Status Terbaru -</option>
                            <option value="Outsourcing">Aktif</option>
							<option value="Kontrak">Relatif</option>
							<option value="Tetap">Pasif</option>
						</select> 
					</div>
                    <div class="col-sm-3">
                    <b>Status Sekarang :</b> <span class="label label-info"><?php echo $row['status']; ?></span>
				    </div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" value="<?php //echo $row['username']; ?>" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" value="<?php //echo $row['password']; ?>" class="form-control" placeholder="Password">
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
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