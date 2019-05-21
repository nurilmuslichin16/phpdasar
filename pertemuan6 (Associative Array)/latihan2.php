<?php 
// $mahasiswa = [
// 	["Nuril Muslichin", "16.240.0027", "Teknik Informatika", "nurilmuslichin16@gmail.com"],
// 	["Mahasiswa", "16.240.0000", "Teknik Informatika", "mahasiswa@gmail.com"]
// ];

//Array Associative
//definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" 		=> "Nuril Muslichin",
		"nim" 		=> "16.240.0027",
		"jurusan" 	=> "Teknik Informatika",
		"email"		=> "nurilmuslichin16@gmail.com",
		"gambar"	=> "1.jpg"
	],
	[
		"nama" 		=> "Mahasiswa",
		"nim" 		=> "16.240.0000",
		"jurusan" 	=> "Teknik Informatika",
		"email"		=> "mahasiswa@gmail.com",
		"gambar"	=> "2.jpg"
		// "tugas"		=> [80,90,70]
	]
];

// echo $mahasiswa[1]["tugas"][1];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<img width="20%" src="img/<?php echo $mhs["gambar"] ?>">
			</li>
			<li>Nama : <?php echo $mhs["nama"] ?></li>
			<li>NIM : <?php echo $mhs["nim"] ?></li>
			<li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
			<li>Email : <?php echo $mhs["email"] ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>