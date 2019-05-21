<?php 
//Pertemuan 2 - PHP Dasar
//Sintaks PHP

//Standar Ouput
//echo, print
//print_r
//var_dump

//Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

//Variabel dan Tipe Data
//Variabel
//Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Nuril";
// echo "Nama saya $nama"

//Operator
//Aritmatika
// + - * / %
// $x = 10;
// $y = 10;
// echo $x * $y;

//Penggabung string / concatenation / concat
// .
// $nama_depan = "Nuril";
// $nama_belakang = "Muslichin";
// echo $nama_depan ." ". $nama_belakang;

//Asignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Nuril";
// $nama .= " ";
// $nama .= "Muslichin";

//Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

//Identitas
// ===, !==
//var_dump(1 === "1");

//Logika
//&&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Selamat Datang <?php echo "Nuril Muslichin" ?></h1>
</body>
</html>