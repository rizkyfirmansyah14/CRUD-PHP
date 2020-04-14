<?php
print_r($_POST);
include 'koneksi.php';
$kun=bukaKoneksi();

// menyimpan data kedalam variabel
$name = $_POST['name'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$stock = $_POST['stock'];
$gambar = $_POST['gambar'];
$hitung = $_POST['harga'] * $_POST['stock'];

// query SQL untuk insert data
$query = mysqli_query($kun,"INSERT INTO `invoice` (`no`, `kode`, `nama`, `harga`, `satuan`, `kategori`, `jumlah`, `gambar`) VALUES (NULL, '$name', '$nama', '$harga', '$satuan', '$kategori', '$stock', '$gambar');");
if($query==TRUE){
    echo "Data Tersimpan";
    mysqli_query($koneksi, $query);
}else{
    echo "Data Gagal Simpan";
}

// mengalihkan ke halaman index.php
header("location:inventory.php");
?>

