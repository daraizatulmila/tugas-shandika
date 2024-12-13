<!-- Get dan Post -->


<!-- // SUPERGLOBALS
//SUPERGLOBALS ada 7, $_GET, $_POST, $-REQUEST, $_SESSION, $_SERVER, $_ENV
//variable global milik php
//merupakan array associative
///var_dump($_SERVER) sudah ada isisnya
//contoh manggil echo $_SERVER["SERVER_NAME"]; -->
<!-- <ul>
            <li><img src="images/<?= $mhs["gambar"]; ?>"></li>
            <li><?= $mhs["nama"] ?></li>
            <li><?= $mhs["nrp"] ?></li>
        </ul> -->

<?php 
//$_GET
//http://localhost/belajarphp/tgsyoutube/belajar13vd9.php?nama=dara%20izatul%20mila&nrp=1234567 cara mengirimkan variabel lewat get di localhost
// $_GET["nama"] = "Dara izatul mila";
// $_GET["nrp"] = "1234567";
$mahasiswa = [
    [
                "nama" => "Dara Izatul Mila",
                "nrp" =>"1234567",  
                "email" => "daraizatul@gmail.com",
                "jurusan" => "Rekayasa Perangkat Lunak",
                "gambar" => "foto3.jpg"
    ],
    [
        "nama" => "Taehyung",
        "nrp" =>"7654321",  
        "email" => "thv@gmail.com",
        "jurusan" => "Teknik",
        "gambar" => "foto3.jpg"
    ]

    ];
?>

<!DOCTYPE html>

<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <a href="halaman2dr13.php?nama=<?=$mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?></a> 
        <?php endforeach; ?>
        </ul>
</body>
</html>