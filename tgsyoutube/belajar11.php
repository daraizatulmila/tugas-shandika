<!-- review membuat array -->



<!-- php 

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];
//menampilkan array
//versi debugging
var_dump($hari);
echo"<br>";
print_r($bulan);
//menampilkan 1 elemen pada array
echo $arr[0]; // dimulai dari 0


 tutup php-->

<!-- menampilkan array menggunakan pengulangan -->
 <!DOCTYPE html>
 <head>
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;

        }
        .clear {
            clear: both;
        }
        
    </style>
 </head>
 <body>

 <?php 
 $angka =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
 ?>

<!-- kasih kotak memkai cara foreach -->
 <?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b) :?>
 <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <!-- jika ingin cetak kebawah kita butuh clear -->
     <div class="clear"></div>
    <?php endforeach; ?>

 <!-- jika kita ingin menampilkan hanya satu angka dari array didalam array contoh
  $angka = [[1,2,3],[4,5,6],[7,8,9]];
  echo $angka[1][1]; //hasilnya 5 karna 5, array yang pertama karena 1-3 dihitung 0-->
    
 </body>
 </html>