<?php 

sleep(0.5);

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM jamtangan
				WHERE 
				type LIKE '%$keyword%' OR
				warna LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				ukuran LIKE '%$keyword%' OR
				gender LIKE '%$keyword%' OR
				stok LIKE '%$keyword%'
			";
$jamtangan = query($query);

?>

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