<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Tahun Ajaran</title>
</head>
<body>
	<h1>Data Tahun Ajaran</h1>
	<a href ="add.php">Tambah Data</a>
	<br>
	<br>
	<?php

		$sql = "SELECT * FROM ta";
		$res = $conn->query($sql);
		echo "<table border='1'>";
		echo "<thead>
					<th>No</th>
					<th>Tahun Ajaran</th>
					<th>Aksi</th>
				</thead>
				</tbody>";
		$i = 0;
		while ($dat = $res->fetch_array(MYSQLI_BOTH)) {
			$i++;
			echo "<tr align='center'>
					<td>$i</td>
					<td>".$dat["nama"]."</td>
					<td><a href='update.php?id=".$dat['id']."'>Ubah</a> | <a href='proses.php?id=".$dat['id']."'>Hapus</td>
					</tr>";
		}
		echo "</tbody>
			</table>"
	?>

</body>
</html>