<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$tinggi = strip_tags($_POST['tinggi']);
	$berat = strip_tags($_POST['berat']);
	$umur = strip_tags($_POST['umur']);
	$tlpn = strip_tags($_POST['telpon']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$tinggi = $DBcon->real_escape_string($tinggi);
	$berat = $DBcon->real_escape_string($berat);
	$umur = $DBcon->real_escape_string($umur);
	$tlpn = $DBcon->real_escape_string($tlpn);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tbl_users (username,email,tinggi_badan,berat_badan,umur,no_telepon,password) VALUES('$uname','$email','$tinggi','$berat','$umur','$tlpn','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
           
           <a href="dokter.html" class="btn btn-default" style="float:right;">Back</a>
      
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="username" required  />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email Address" name="email" required  />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Tinggi Badan (Cm)" name="tinggi" required  />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Berat Badan (Kg)" name="berat" required  />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Umur (Tahun)" name="umur" required  />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="No Telepone" name="telpon" required  />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div> 
      
      </form>

    </div>
    
</div>

</body>
</html>