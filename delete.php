<?php
include('koneksi.php');
$koneksi=bukaKoneksi();
$querybaca=mysqli_query($koneksi,"SELECT * FROM invoice");
// menyimpan data id kedalam variabel
$id   = $_GET['no'];
echo $id;
// query SQL untuk insert data
$query="DELETE FROM `invoice` WHERE `invoice`.`no` = $id";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:inventory.php");
?>