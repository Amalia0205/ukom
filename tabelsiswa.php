<?php
require_once 'connect.php';

	if (isset($_GET['nik'])) {

		$nik = ($_GET['nik']);

} else {

$query = "SELECT * FROM siswa";
$data = $connect->query($query);


			if ($data-> num_rows > 0) {
				# code...
				echo '<table>';

				echo '<th>amala</th><th>amalu</th>';
				echo '<td> . row [$nis]</td>';

			} else {
				echo "tidak ada data";
			}
		}
?>