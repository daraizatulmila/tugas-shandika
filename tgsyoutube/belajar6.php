<?php
// garis miring 3 berarti codingan
// Date
// Untuk menampilkan tanggal dengan format tertentu
//echo date("l, d-M-Y); untuk menampilkan tanggal bulan
// time
// UNIX timestamp / EPOCH
// detik yang sudah berlalu sejak 1 januari 1970
//time()+60*60*24*100); untuk mengetahui tanggal dari maju ataupun mundur
///echo date("D-M-Y", time()+60*60*24*100*28);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
//echo date("l", mktime(0,0,0,8,25,1985));


//strtotime
echo date("l", strtotime("25 sep 2024"));





?>