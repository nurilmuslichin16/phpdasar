<?php 
//Array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

//cara membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = ["tes", 123, false];

//Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //Menampilkan 1 elemen pada array
// echo $arr1[1];
// echo "<br>";
// echo $hari[2];

//Menambah elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>