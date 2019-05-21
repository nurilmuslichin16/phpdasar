<?php 
require 'functions.php';
$jamtangan = query("SELECT * FROM jamtangan");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Jam Tangan</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Type</th>
		<th>Warna</th>
		<th>Merek</th>
		<th>Ukuran</th>
		<th>Gender</th>
		<th>Stok</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($jamtangan as $row) : ?>
		<tr>
			<td><?php echo $i ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $row["id"] ?>">Ubah</a> |
				<a href="hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
			</td>
			<td><?php echo $row["type"] ?></td>
			<td><?php echo $row["warna"] ?></td>
			<td><?php echo $row["merek"] ?></td>
			<td><?php echo $row["ukuran"] ?></td>
			<td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["stok"] ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>

</body>
</html>