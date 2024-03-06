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

		input[type="date"]{
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

	<header>
		<h1>WELCOME TO SMKN 5 KOTA BEKASI</h1>
	</header>

	<section>

<?php

	require_once 'connect.php';

	if (isset($_POST['submit'])) {

		$nip = strip_tags($_POST['nip']);
		$nama = strip_tags($_POST['nama']);
		$tempat_lahir = strip_tags($_POST['tempat_lahir']);
		$tanggal_lahir = strip_tags($_POST['tanggal_lahir']);
		$agama = strip_tags($_POST['agama']);
		$mapel = strip_tags($_POST['mapel']);
		$alamat = strip_tags($_POST['alamat']);
		$nama_pt = strip_tags($_POST['nama_pt']);
		$ijazah = strip_tags($_POST['ijazah']);
		$lulus = strip_tags($_POST['lulus']);
		$golongan = strip_tags($_POST['golongan']);
		$ket = strip_tags($_POST['ket']);
		$jenis_kelamin = strip_tags($_POST['jenis_kelamin']);


		if (empty($nip) || empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($agama) || empty($mapel) || empty($alamat) || empty($nama_pt) || empty($ijazah) || empty($lulus) || empty($golongan) || empty($ket) || empty($jenis_kelamin)) {

			echo 'masih ada yang kosong';
			# code...
		}else {
			$insert = $connect->query('INSERT INTO guru (nip, nama, tempat_lahir, tanggal_lahir, agama, mapel, alamat, nama_pt, ijazah, lulus, golongan, ket, jenis_kelamin)VALUES("'.$nip.'", "'.$nama.'", "'.$tempat_lahir.'", "'.$tanggal_lahir.'", "'.$agama.'", "'.$mapel.'", "'.$alamat.'", "'.$nama_pt.'", "'.$ijazah.'", "'.$lulus.'", "'.$golongan.'", "'.$ket.'", "'.$jenis_kelamin.'")');

			if ($insert) {

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
		<label><b>NIP:</b></label><br>
		<input type="text" name="nip" autocomplete="off" placeholder="Masukkan Password">
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
		<br><label><b>AGAMA:</b></label><br>
		<input type="text" name="agama" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>MAPEL:</b></label><br>
		<input type="text" name="mapel" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>ALAMAT:</b></label><br>
		<input type="text" name="alamat" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>NAMA PT:</b></label><br>
		<input type="text" name="nama_pt" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>IJAZAH:</b></label><br>
		<input type="text" name="ijazah" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>LULUS:</b></label><br>
		<input type="text" name="lulus" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>GOLONGAN:</b></label><br>
		<input type="text" name="golongan" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>KETERANGAN:</b></label><br>
		<input type="text" name="ket" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<label><b>JENIS KELAMIN:</b></label><br>
		<input type="text" name="jenis_kelamin" autocomplete="off" placeholder="Masukkan Username">
		<br>
		<br>
		<input type="submit" name="submit" value="TAMBAH DATA">	
	</section>

</body>
</html>