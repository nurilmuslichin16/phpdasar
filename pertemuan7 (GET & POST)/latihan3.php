<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

	<?php if(isset($_POST["submit"])) : ?>
		<h1>Selamat Datang, <?php echo $_POST["type"] ?></h1>
	<?php endif; ?>

	<form action="" method="post">
		Masukkan Type :
		<input type="text" name="type">	
		<br>
		<button type="submit" name="submit">Kirim!</button>
	</form>

</body>
</html>