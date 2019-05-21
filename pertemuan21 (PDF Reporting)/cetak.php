<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$jamtangan = query("SELECT * FROM jamtangan");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
		<html>
		<head>
			<title>Daftar Jam Tangan</title>
			<link rel="stylesheet" href="css/print.css">
		</head>
		<body>
			<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Type</th>
				<th>Warna</th>
				<th>Merek</th>
				<th>Ukuran</th>
				<th>Gender</th>
				<th>Stok</th>
			</tr>';
		$i = 1;
		foreach($jamtangan as $row) {
			$html .= '<tr>
						<td>'. $i++ .'</td>
						<td>'. $row["type"] .'</td>
						<td>'. $row["warna"] .'</td>
						<td>'. $row["merek"] .'</td>
						<td>'. $row["ukuran"] .'</td>
						<td>'. $row["gender"] .'</td>
						<td>'. $row["stok"] .'</td>
					</tr>';
		};

$html .= '</table>
		</body>
		</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-jamtangan.pdf', \Mpdf\Output\Destination::INLINE);

?>