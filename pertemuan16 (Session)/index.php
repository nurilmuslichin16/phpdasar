<?php 
session_start();

if( !isset($_SESSION["login"] )){
	header("Location: login.php");
	exit;
}

require 'functions.php';
$jamtangan = query("SELECT * FROM jamtangan ORDER BY id DESC");

// tombol cari ditekan
if( isset($_POST["cari"]) ){
	$jamtangan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout!</a>

<h1>Daftar Jam Tangan</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="POST">
	<input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>

<br>

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
		<!-- <th>Gambar</th> -->
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
			<!-- <td>
				<img style="width: 20%" src="img/<?php echo $row["gambar"] ?>">
			</td> -->
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>

</body>
</html>