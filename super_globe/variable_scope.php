<?php

// lingkup variable
$x=11;

// kegunaan variable global
function number(){
    global $x;
    // jika ingin menampilkan variable diluar 
    // lingkup function harus ditambahkan (global)
    // sebelum memanggil variable
    echo $x; 
}

number();
echo "<br>";
// contoh function menggunakan variable local
function number2(){
    $x=15;
    echo $x;
}

number2();