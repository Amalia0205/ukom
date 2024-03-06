<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ukom";

$connect = new mysqli($servername, $username, $password, $database);

if ($connect->error) {

	die($connect->error);
	# code...
} else {

	echo "berhasil";
}

?>