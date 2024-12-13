<!-- video8 -->
<!-- lanjutan kasus mahasiswa video sebelumnya/video 7 -->

<?php 

// $mahasiswa = [
// ["Dara Izatul Mila", "01234567", "Rekayasa Perangkat Lunak",
//  "daraizatul@gmail.com"],
//  ["Taehyung", "7654321", "Teknik",
//  "thv@gmail.com"],
// ];

//Array Associative
//definisinya sama seperti array numerik, kecuali
// pada array ini key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
                "nama" => "Dara Izatul Mila",
                "nrp" =>"1234567",  
                "email" => "daraizatul@gmail.com",
                "jurusan" => "Rekayasa Perangkat Lunak",
                "gambar" => "foto2.jpg"
    ],
    [
        "nama" => "Taehyung",
        "nrp" =>"7654321",  
        "email" => "thv@gmail.com",
        "jurusan" => "Teknik",
        "gambar" => "foto2.jpg"
    ]

    ];
    ///  echo $mahasiswa[1]["tugas"][1]; //gabungan aarray numerik dan array associative

?>

<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="images/<?= $mhs["gambar"]; ?>">
        </li>
     <li>Nama :<?= $mhs["nama"]; ?></li>
     <li>NRP :<?= $mhs["nrp"]; ?></li>
     <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
     <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>