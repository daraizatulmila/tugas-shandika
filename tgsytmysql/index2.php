<!-- video 11 -->

<?php 
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari table mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if( !$result ) {echo mysqli_error($conn);} cara melihat eror

// ambil data (fetch) mahasiswa dari objek result
//mysqli_fetch_tow() // mengembalikan array numerik(array yg indeksnnya angka)
//mysqli_fetch_assoc() // mengembalikan array associatiave
//mysqli_fetch_array() // mengembalikan keduanya
//mysqli_fetch_object()

/// $mhs = mysqli_fetch_row($result);
/// var_dump($mhs[3]);

///  $mhs = mysqli_fetch_assoc($result);
/// var_dump($mhs["jurusan"]);

///  $mhs = mysqli_fetch_array($result);
/// var_dump($mhs["jurusan"]);

///  $mhs = mysqli_fetch_object($result);
/// var_dump($mhs->nama);

// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }




?>




<!DOCTYPE html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
    
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>jurusan</th>

    </tr>
    <?php $i = 1; ?>

    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>

<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/laskar2.jpeg" width="50"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
    
</table>

</body>
</html>