<?php 
$mahasiswa = [
	["Nuril Muslichin", "16.240.0027", "Teknik Informatika", "nurilmuslichin16@gmail.com"],
	["Mahasiswa", "16.240.0000", "Teknik Informatika", "mahasiswa@gmail.com"]
];
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
			<li>Nama : <?php echo $mhs[0] ?></li>
			<li>NIM : <?php echo $mhs[1] ?></li>
			<li>Jurusan : <?php echo $mhs[2] ?></li>
			<li>Email : <?php echo $mhs[3] ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>