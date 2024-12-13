<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || !isset($_GET["nrp"]) || 
!isset($_GET["email"]) || !isset($_GET["jurusan"]) ||!isset($_GET["gsmbar"])) {
//redirect
header("Location: belajar13vd9.php");
exit;
}

?>



<!DOCTYPE html>
<head>
    <title>Detail mahasiswa</title>
</head>
<body>

<ul>
    <li><img src="tgs/img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="belajar13vd9.php">kembali ke daftar mahasiswa</a>
    
</body>
</html>