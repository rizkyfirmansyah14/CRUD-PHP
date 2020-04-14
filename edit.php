<?php
print_r($_POST);

include('koneksi.php');
$koneksi=bukaKoneksi();
$querybaca=mysqli_query($koneksi,"SELECT * FROM invoice");
// menyimpan data id kedalam variabel
$id   = $_POST['id'];
$nama = $_POST['nama1'];
$harga = $_POST['harga1'];
$satuan = $_POST['satuan1'];
$kategori = $_POST['kategori1'];
$stock = $_POST['stock1'];
$gambar = $_POST['gambar1'];

// query SQL untuk insert data
$query="UPDATE `invoice` SET `nama` = '$nama', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kategori', `jumlah` = '$stock', `gambar` = '$gambar' WHERE `invoice`.`no` = $id;";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:inventory.php");
?>