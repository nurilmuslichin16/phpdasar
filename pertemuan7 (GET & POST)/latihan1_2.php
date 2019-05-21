<?php 
//Variabel Superglobals
// Variabel global milik PHP
// merupakan Array Associative

//$_GET
$jamtangan = [
	[
		"type" 		=> "DG2095T",
		"warna" 	=> "Merah",
		"merek"		=> "DIGITEC",
		"ukuran"	=> "4,5 cm",
		"gambar"	=> "DG2095T_merah.jpg"
	],
	[
		"type" 		=> "DG2094T",
		"warna" 	=> "Hitam",
		"merek"		=> "DIGITEC",
		"ukuran"	=> "5 cm",
		"gambar"	=> "DG2094T_hitam.jpg"
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Jam Tangan</h1>

	<lu>
	<?php foreach($jamtangan as $jam) : ?>
		<a href="latihan2.php?type=<?= $jam["type"] ?>&warna=<?= $jam["warna"] ?>&merek=<?= $jam["merek"] ?>&ukuran=<?= $jam["ukuran"] ?>&gambar=<?= $jam["gambar"] ?>"><li><?php echo $jam["type"] ?></li></a>
	<?php endforeach; ?>
	</lu>

</body>
</html>