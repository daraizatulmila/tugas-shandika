<!-- video 9 tentang POST -->
 <!-- menggunakan post -->


<!DOCTYPE html>
 <head>
    <title>POST</title>
 </head>
 <body>
    <?php if(isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?> 

<form action="halaman2dr14.php" method="post"> 
    Masukkan Nama
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</from>
    
 </body>
 </html>