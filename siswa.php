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

	<header>
		<h1>WELCOME TO SMKN 5 KOTA BEKASI</h1>
	</header>

	<section>

<?php

	require_once 'connect.php';

	if (isset($_POST['submit'])) {

		$nis = strip_tags($_POST['nis']);
		$nama = strip_tags($_POST['nama']);
		$tempat_lahir = strip_tags($_POST['tempat_lahir']);
		$tanggal_lahir = strip_tags($_POST['tanggal_lahir']);
		$jenis_kelamin = strip_tags($_POST['jenis_kelamin']);
		$agama = strip_tags($_POST['agama']);
		$ayah = strip_tags($_POST['ayah']);
		$ibu = strip_tags($_POST['ibu']);
		$kerja_ayah = strip_tags($_POST['kerja_ayah']);
		$kerja_ibu = strip_tags($_POST['kerja_ibu']);
		$alamat = strip_tags($_POST['alamat']);


		if (empty($nis) || empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($jenis_kelamin) || empty($agama) || empty($ayah) || empty($ibu) || empty($kerja_ayah) || empty($kerja_ibu) || empty($alamat)) {

			echo 'masih ada yang kosong';
			# code...
		}else {
			$insert = $connect->query('INSERT INTO siswa (nis, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, ayah, ibu, kerja_ayah, kerja_ibu, alamat)VALUES("'.$nis.'", "'.$nama.'", "'.$tempat_lahir.'", "'.$tanggal_lahir.'", "'.$jenis_kelamin.'", "'.$agama.'", "'.$ayah.'", "'.$ibu.'", "'.$kerja_ayah.'", "'.$kerja_ibu.'", "'.$alamat.'")');

			if ($insert) {

				header("refresh:3; url = register.php");

				# code...
			}else{
				echo "gagal";
			}
		}
		# code...
	}
	?>

	

	

	<form method="POST">
		<div class="container">
		<h2>DATA SISWA</h2>
		<label><b>NIS:</b></label><br>
		<input type="text" name="nis" autocomplete="off" placeholder="Masukkan Password">
		<br><br>
		<label><b>NAMA:</b></label><br>
		<input type="text" name="nama" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br><label><b>TEMPAT LAHIR:</b></label><br>
		<input type="text" name="tempat_lahir" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>TANGGAL LAHIR:</b></label><br>
		<input type="text" name="tanggal_lahir" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>JENIS KELAMIN:</b></label><br>
		<input type="text" name="jenis_kelamin" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>AGAMA:</b></label><br>
		<input type="text" name="agama" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>NAMA AYAH:</b></label><br>
		<input type="text" name="ayah" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>NAMA IBU:</b></label><br>
		<input type="text" name="ibu" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>PEKERJAAN AYAH:</b></label><br>
		<input type="text" name="kerja_ayah" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>PEKERJAAN IBU:</b></label><br>
		<input type="text" name="kerja_ibu" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>ALAMAT:</b></label><br>
		<input type="text" name="alamat" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		
		<input type="submit" name="submit" value="TAMBAH DATA">	
	</form>
</div>

</body>
</html>