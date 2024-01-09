<?php
$kota = array("Bandung","Kuningan","Jakarta");
$mobil = ['avanza','civic','honda'];
$negara = array("Indonesia","Palestina","Arab");

// echo "saya suka ". $mobil[0] .", ". $mobil[1] ." dan ". $mobil[2] .".";
// echo "<br>";
// var_dump($kota);
// echo "<br>";
// print_r($negara);


var_dump($kota);
$kota[] = "Yogyakarta";
echo "<br>";
var_dump($kota);
echo "<br>";
$kota[3] = "Jayapura";
echo "<br>";
var_dump($kota);