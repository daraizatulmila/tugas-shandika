<!-- */lanjutan video 7 array, foreach -->


<?php
$mahasiswa = [
["Dara Izatul Mila", "01234567", "Rekayasa Perangkat Lunak",
 "daraizatul@gmail.com"],
["Taehyung", "7654321", "Teknik",
 "thv@gmail.com"],
["jaehyun", "0987654", "Teknik",
 "jhy@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ):?>
<ul>
 <li>Nama :<?= $mhs[0]; ?></li>
 <li>NRP :<?= $mhs[1]; ?></li>
 <li>Jurusan :<?= $mhs[2]; ?></li>
 <li>Email :<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>

<!-- video berikutnya  Associative array-->