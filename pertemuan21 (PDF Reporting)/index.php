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
	<style>
		.loader{
			width: 50px;
			top: 125px;
			left: 260px;
			z-index: -1;
			display: none;
		}

		@media print {
			.logout, .form-cari, .tambah, .aksi{
				display: none;
			}
		}
	</style>

	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="js/jquery-3.4.0.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

<div class="card">
  <div class="card-body">

	<a class="btn btn-danger" href="logout.php" class="logout">Logout!</a> | <a class="btn btn-info" href="cetak.php" target="_blank">Cetak</a>

	<h1>Daftar Jam Tangan</h1>

	<a class="btn btn-success" href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
	<br><br>

	<form class="form-cari" action="" method="POST">
		<input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>

		<img src="img/loader.gif" class="loader">
	</form>

	<br>

	<div id="container">

		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th class="aksi">Aksi</th>
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
					<td class="aksi">
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

	</div>

  </div>
</div>

<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>