<?php 
	// Date
	// Untuk menampilkan tanggal dengan format tertentu
	// echo date("l, d-M-Y");

	//Time
	// UNIX Timestamp / EPOCH time
	// detik yang sudah berlalu sejak 1 Januari 1970
	// echo time();

	// echo date("l, d M Y", time()+60*60*24*5);


	//mktime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam, menit, detik, bulan, tanggal, tahun
	// echo date("l",mktime(0,0,0,2,16,1999));

	//strtotime
	echo date("l", strtotime("16 feb 2050"));
?>