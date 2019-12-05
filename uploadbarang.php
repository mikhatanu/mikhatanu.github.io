<!DOCTYPE html>
<?php
    require_once("connect.php");
    require_once("Dologin.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Jualan Mu Disini</title>
</head>
<body>
    <?php
        if(isset($_SESSION['Username'])){
    ?>
            <form action="Douploadbarang.php" method="post" enctype="multipart/form-data">
                Nama Produk: <input type="text" class="namaproduk" name="namabarang" placeholder="maksimal 25 kata">
                Harga Produk: <input type="text" class="hargaproduk" name="hargabarang">
                Stok Produk: <input type="text" class="stokproduk" name="stokbarang">
                Gambar Produk: <input type="file" class="gambarproduk" name="gambarbarang" placeholder="maksimal 1 mb">
                <input type="submit" value="Upload Barang Mu">
            </form>
    <?php
        }
        else{
            echo "Kamu Belum Login :( Silahkan Login Terlebih Dahulu!"
    ?>
            <br><a href="Index.php">Kembali ke Halaman utama</a>
    <?php
        }
    ?>
</body>
</html>