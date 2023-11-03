<?php

// code date "l" iku nama hari
// "m" iku angka bulan "M" nama bulan
// "y" iku tahun
// "d" iku tanggal
// lek pengen cek seng lengkap nang php.net

echo date("l, d-M-Y") ;
echo "<br>";

// echo time();
// yang akan muncul adalah detik yg berlangsung
// dari 1 januari 1970 sampai sekarang

// mktime
// membuat detik sendiri dihitung mulai 1970
// mktime (0,0,0,0,0,0)
// urutan mulai dari jam, menit,detik
// bulan, tanggal, tahun
// inget jika nominal kurang dari 10 jangan
// ditambah 0 di awal contoh 
// mktime(0,0,0,09,19,2001) ini salah
// mktime(0,0,0,9,19,2001) ini benar
echo date ("l,d-M-Y", mktime(0,0,0,9,19,2001));
echo "<br>";
// strtotime
// sama seperti mktime
// kebalikan dari mktime yg masukin variable angka
// strtotime kita memasukan format tanggal/string
echo date("l,d-M-Y", strtotime("19 sept 2001"));
