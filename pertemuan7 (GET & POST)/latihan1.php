<?php 
//Variabel Scope / lingkup variabel

$x = 10;

function tampil(){
	global $x;
	echo $x;
}

tampil();

?>