


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

		
		button{
			border: 1px black;
			border-radius: 8px;
			padding: 10px;
			width: 15%;
			background-color: #FFE599;
			margin-right: 15px;

		}

		footer{
			background-color: #FFE599;
			padding: 25px;
			


		
	</style>
</head>
<body>

	<header>
		<h1>WELCOME TO SMKN 5 KOTA BEKASI</h1>
	</header>

	<section>

		<a href="guru.php"><button>Guru</button></a>
		<a href="siswa.php"><button>Siswa</button></a>
		
	</form>

	</section>

	<footer><b>@SMKN 5 KOTA BEKASI 2024</b></footer>

	<?php
if ($_SESSION->null) {
	header("refresh:2; home.php");
	# code...
} else {
	echo "gagal";
}
?>


</body>

<script>
 


</script>
</html>