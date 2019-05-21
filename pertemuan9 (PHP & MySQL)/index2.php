<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel jamtangan / query data jamtangan
$result = mysqli_query($koneksi, "SELECT * FROM jamtangan");

// ambil data (fetch) jamtangan dari objek result
// mysqli_fetch_row() // mengembalikan array numerik (angka)
// mysqli_fetch_assoc() // mengambalikan array associative (string)
// mysqli_fetch_array() // mengembalikan array numerik dan associative
// mysqli_fetch_object() // mengembalikan nilai objek

// while( $mhs = mysqli_fetch_assoc($result) ){
// 	var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Jam Tangan</h1>

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
	<?php while($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $i ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><?php echo $row["type"] ?></td>
			<td><?php echo $row["warna"] ?></td>
			<td><?php echo $row["merek"] ?></td>
			<td><?php echo $row["ukuran"] ?></td>
			<td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["stok"] ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>

</body>
</html>