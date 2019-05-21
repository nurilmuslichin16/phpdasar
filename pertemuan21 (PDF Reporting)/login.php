<?php 
session_start();
require "functions.php";

// cek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ){
		$_SESSION['login'] = true;
	}
}

if( isset($_SESSION["login"]) ){
	header("Location: index.php");
	exit;
}

if( isset($_POST["login"] )){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ){
		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ){
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST["remember"]) ){
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">

	<h1 align="center" class="display-4">Halaman Login</h1>

	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username/Password Salah!</p>
	<?php endif; ?>

	<form action="" method="POST">
	  <div class="form-group">
	  	<label for="username">Username :</label>
		<input class="form-control" type="text" name="username" id="username" placeholder="Username">
	  </div>
	  <div class="form-group">
	  	<label for="password">Password :</label>
		<input class="form-control" type="password" name="password" id="password" placeholder="Password">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" name="remember" id="remember">
	    <label class="form-check-label" for="remember">Remember Me</label>
	  </div>
	  <button type="submit" name="login" class="btn btn-success">Login!</button>
	</form>

	</div>

<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>