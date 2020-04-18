<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Buyer login</title>
	<link rel="stylesheet" type="text/css" href="../Styles/BuyerLogin.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<style>
		@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

		body {
			margin: 0;
			font-size: .9rem;
			font-weight: 400;
			line-height: 1.6;
			color: #212529;
			text-align: left;
			background-color: #f5f8fa;
		}

		.my-form,
		.login-form {
			font-family: Raleway, sans-serif;
		}

		.my-form {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.my-form .row {
			margin-left: 0;
			margin-right: 0;
		}

		.login-form {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.login-form .row {
			margin-left: 0;
			margin-right: 0;
		}
	</style>
</head>

<body>

	<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<h4 style="font-style:bold;">Login</h4>
						</div>
						<div class="card-body">
							<form name="my-form" action="BuyerLogin.php" method="post">

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right">Password</label>
									<div class="col-md-6">
										<input id="p1" class="form-control" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary" name="login" value="Login">
										Login
									</button>
								</div>
								<br>
								<div class="col-md-6 offset-md-4">
									<label id="forgotPassword"><a id='link' href="BuyerForgotPassword.php">Forgot your password ?</a></label>
									<br>
									<label id="account"><a id='link' href="BuyerRegistration.php">Create New Account</a></label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>


<?php
include("../Includes/db.php");
session_start();
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '2345678910111211';
	$encryption_key = "DE";

	$encryption = openssl_encrypt(
		$password,
		$ciphering,
		$encryption_key,
		$options,
		$encryption_iv
	);

	$query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$encryption'";
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('BuyerLogin.php','_self')</script>";
	}
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['buyer_id'];
	}


	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../BuyerPortal2/bhome.php','_self')</script>";
}

?>