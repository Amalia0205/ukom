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


				echo ($data = mysqli_fetch_assoc($query));
				echo '<th>amala</th><th>amalu</th>';
				echo "<td>" .$data['nis'] . "</td>";

			} else {
				echo "tidak ada data";
			}
		}
?>