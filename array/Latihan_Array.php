<?php

// array adalah penyimpanan beberapa value 
// dalam satu variable
$name = ["joko","asri","puji","budi"];
$bulan = ["januari","februari","maret","april"];
// dalam array di php isi variable bisa juga dicampur
$campur = [123,"hallo",1.23,true];

// untuk menampilkan isi array 
// var_dump atau print_r()
// hanya digunakan untuk developer
// untuk mengecek debug script
// bukan untuk user
var_dump ($campur) ;
echo "<br>";
print_r($bulan);
echo "<br>";

// apabila hanya menampilkan 1 value bisa menggunakan 
// echo $nama array dan index []
// index dari array pasti dimulai dari 0
echo $campur[0];
echo "<br>";
echo $campur[1];

// cara menambahkan isi array
// value pasti akan 
// ditambahkan paling belakang
$name[]= "bambang";
$bulan[]= "januari";


// mengubah isi array 
// apabila index [] di isi 
// value array akan diubah ke urutan sesuai 
// isi index [] yg diketik  
$bulan[0]= "mei";
var_dump($name);
echo "<br>"; 
var_dump($bulan); 
