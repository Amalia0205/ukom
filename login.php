<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEB SEKOLAH SMKN 5 KOTA BEKASI</title>
	<style>
		body{
			background-color: #E6E6E6;
			text-align: center;
			font-family: helvetica;
		}

		header{
			background-color: #FFE599;
			padding: 25px;

		}

		.container{
			background-color: #FFF2CC;
			border-radius: 75px;
			border: 5px black;
			margin-left: 30%;
			margin-right: 30%;
			padding-top: 25px;
			padding-bottom: 30px;
			
		}

		label{
			margin-bottom: 5px;
			font-size: 18px;
		}

		input[type="text"]{
			border: 1px black;
			border-radius: 10px;
			padding: 15px;
			width: 70%;

		}

		input[type="password"]{
			border: 1px black;
			border-radius: 10px;
			padding: 15px;
			width: 100%;
		
		}

		input[type="date"]{
			border: 1px black;
			border-radius: 10px;
			padding: 15px;
			width: 100%;
		
		}

		input[type="submit"]{
			border: 1px black;
			border-radius: 8px;
			padding: 15px;
			width: 55%;
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
			$query = "SELECT * FROM admin WHERE password = '$password' AND username = '$username'";
			$result = $connect->query($query);


			if ($result-> num_rows > 0) {
				$_SESSION['proses'] = $username;

				# code...
				header("refresh:2; home.php");

				# code...
			}else{
				echo "tak ada data";
			}
		}
		# code...
	}
	?>



	<header>
		<h1>WELCOME TO SMKN 5 KOTA BEKASI</h1>
	</header>

	

	<form method="POST">
		<div class="container">
		<h2>SILAHKAN LOGIN TERLEBIH DAHULU</h2>

		<label><b>PASSWORD:</b></label><br>
		<input type="text" id="password" name="password" placeholder="Masukkan Password">
		<br><br>
		<label><b>USERNAME:</b></label><br>
		<input type="text" id="username" name="username" placeholder="Masukkan Username">
		<br>
		<br>
		<input type="submit" name="submit" value="LOGIN">
		
	</form>

	</div>

	<footer><b>@SMKN 5 KOTA BEKASI 2024</b></footer>

</body>
</html>