<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0
/// $nama = "DARA";
///$hari1 ="senin";
/// $hari2 = "Selasa";
// membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
///echo $hari;
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);






?>