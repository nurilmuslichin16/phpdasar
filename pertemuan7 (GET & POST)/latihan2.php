<?php 
// cek apakah tidak ada data di $_GET
if(!isset($_GET["type"]) ||
	!isset($_GET["warna"]) ||
	!isset($_GET["merek"]) ||
	!isset($_GET["ukuran"]) ||
	!isset($_GET["gambar"])){
	//redirect
	header("Location: latihan1_2.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Jam Tangan</title>
</head>
<body>
	<ul>
		<li><img width="20%" src="img/<?= $_GET["gambar"] ?>"></li>
		<li>Type : <?php echo $_GET["type"] ?></li>
		<li>Warna : <?php echo $_GET["warna"] ?></li>
		<li>Merek : <?php echo $_GET["merek"] ?></li>
		<li>Ukuran : <?php echo $_GET["ukuran"] ?></li>
	</ul>

	<a href="latihan1_2.php">Kembali Ke Daftar Jam Tangan</a>
</body>
</html>