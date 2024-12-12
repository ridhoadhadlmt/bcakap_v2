<?php 
	session_start();
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$login = mysqli_query($koneksi,$sql);
		
		$row = mysqli_num_rows($login);

		if ($row > 0) 
		{
			$ftc = mysqli_fetch_array($login);
			if($ftc['level']=='admin'){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['level'] = 'admin';
				header('location:admin');
				echo $sql;
			}
			// $_SESSION['level'] = $ftc['username'];
			// header('location:admin');
		}
		else{
			// echo $ftc;
			// echo $sql;
			echo $sql;
			$msg = "Username Atau password Salah";
		}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/util.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css">
<!--===============================================================================================-->
</head>
<body style="background: #FFF;">
<div class="container">
 	
 <div class="row" style="margin-top: 120px;margin-bottom: 120px;">
  <div class="col-md-6">
   <img src="img/bela.png" class="img-fluid" style="margin-bottom: 30px;margin-top: 40px;">	
  </div>
  <div class="col-md-6" style="padding-right: 0;">
	<?php if (isset($msg)): ?>	
	<div class="alert alert-danger" style="width: 99%;">
	 <strong><?= $msg ?></strong>
	</div>
   <?php endif ?>
   <div class="card" style="padding: 30px 20px;border: none;background: #FAFAFA">
   	<div class="card-body">
   	<h1 class="lead" style="text-align: center;">LOGIN</h1>	
   	<form action="" method="POST">
	   <div class="form-group">
	   <label class="lead">Username</label>
	   <input type="text" class="form-control" name="username" required="">		
	   </div>
	   <div class="form-group">
	   <label class="lead">Password</label>
	   <input type="password" class="form-control" name="password" required="">	
	   </div>
	   <div class="form-group">
	   <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>	
	</form> 	
   	</div>
   </div>	
   </div>
  </div>	
 </div>	
</div>	
<!-- 	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Login
					</span>
					<?php if (isset($msg)): ?>
						
						<div class="alert alert-danger" style="width: 99%;">
							<strong><?= $msg ?></strong>
						</div>
					<?php endif ?>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn my-3" name="submit">
							Login
						</button>
						<a href="index.php" class="login100-form-btn" name="submit">
							Back To Web
						</a>
					</div>

				</form>
			</div>
		</div>
	</div> -->
	

	<!-- <div id="dropDownSelect1"></div> -->
	

</body>
</html>