<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEB SEKOLAH SMKN 5 KOTA BEKASI</title>
	<style>
		body{
			background-color: #fff;
			text-align: center;
			font-family: helvetica;
		}

		header{
			background-color: #FFE599;
			padding: 25px;

		}

		section{
			background-color: #E6E6E6;
			margin-top: 40px;
			margin-right: 20%;
			margin-left: 20%;
			border-radius: 15px;
			padding: 35px;
			border: 5px black;
			border-color: ;
		}

		label{
			margin-bottom: 5px;
		}

		input[type="text"]{
			border: 1px black;
			border-radius: 5px;
			padding: 10px;
			width: 50%;
		}

		input[type="password"]{
			border: 1px black;
			border-radius: 5px;
			padding: 10px;
			width: 50%;
		
		}
		input[type="submit"]{
			border: 1px black;
			border-radius: 8px;
			padding: 10px;
			width: 15%;
			background-color: #FFE599;
		}

		footer{
			background-color: #FFE599;
			padding: 25px;
			position: flex;


		
	</style>
</head>
<body>

	<?php

	require_once 'connect.php';

	if (isset($_POST['submit'])) {

		$password = strip_tags($_POST['password']);
		$username = strip_tags($_POST['username']);

		if (empty($password) || empty($username)) {

			echo 'masih ada yang kosong';
			# code...
		}else {
			$insert = $connect->query('INSERT INTO admin (password, username)VALUES("'.$password.'", "'.$username.'")');

			if ($insert) {
				header("refresh:2; home.php");

				# code...
			}else{
				echo "gagal";
			}
		}
		# code...
	}
	?>

	<header>
		<h1>WELCOME TO SMKN 5 KOTA BEKASI</h1>
	</header>

	<section>

	<form method="POST">
		<h2>SILAHKAN REGISTER TERLEBIH DAHULU</h2>
		<label><b>PASSWORD:</b></label><br>
		<input type="password" name="password" autocomplete="off" placeholder="Masukkan Password">
		<br><br>
		<label><b>USERNAME:</b></label><br>
		<input type="text" name="username" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<input type="submit" name="submit" value="register">
		
	</form>

	</section>

	<footer><b>@SMKN 5 KOTA BEKASI 2024</b></footer>

</body>
</html>