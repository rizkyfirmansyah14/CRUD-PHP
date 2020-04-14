<?php 
include('koneksi.php');
$koneksi = bukaKoneksi();
$id         = $_GET['no'];
$querybaca = mysqli_query($koneksi,"SELECT * FROM invoice where no='$id'");
$row = mysqli_fetch_array($querybaca);
$satuan    = array('Gelas','Mangkuk','Piring');
$kategori    = array('Minuman Dingin','Minuman Hangat','Makanan');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <style>
      .table{
        margin-top: 5%;
        padding-right: 1%;
        padding-left: 1%;
      }
       </style>
  </head>
  <body>
    <h2 class="text-center mt-3";>Inventory Produk</h2>
    
    <div class="form mt-4 mb-4 border border-dark pt-4 pr-4 pl-4">
    <form method="post" action="edit.php">
    <input type="hidden" value="<?php echo $row['no'];?>" name="id">
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Produk</label>
    <input type="text" readonly class="form-control-plaintext" name="name" value="MD-01"\>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="name" class="form-control" id="exampleFormControlInput1"  value="<?php echo $row['nama'];?>" name="nama1" placeholder="Jus Jambu">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Harga Produk</label>
    <input type="name" class="form-control" id="exampleFormControlInput1"  value="<?php echo $row['harga'];?>" name="harga1" placeholder="1000">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Satuan</label>
    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row['satuan'];?>" name="satuan1" >
    <?php
      foreach ($satuan as $j){
       echo "<option value='$j' ";
       echo $row['satuan']==$j?'selected="selected"':'';
       echo ">$j</option>";
      }
       ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row['kategori'];?>" name="kategori1">
    <?php
      foreach ($kategori as $k){
       echo "<option value='$k' ";
       echo $row['kategori']==$k?'selected="selected"':'';
       echo ">$k</option>";
      }
       ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">URL Gambar</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['gambar'];?>" name="gambar1" placeholder="http://google.com/picture.png">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['jumlah'];?>" name="stock1" placeholder="20">
  </div>

  <input class="mb-3" type="submit">
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>