<?php 
include('koneksi.php');
$koneksi=bukaKoneksi();
$querybaca=mysqli_query($koneksi,"SELECT * FROM invoice");
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

    <form method="post" action="simpan.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Kode Produk</label>
    <input type="text" readonly class="form-control-plaintext" name="name" value="MD-01">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Jus Jambu">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Harga Produk</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" name="harga" placeholder="1000">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Satuan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="satuan">
      <option value="gelas">Gelas</option>
      <option value="mangkuk">Mangkuk</option>
      <option value="piring">Piring</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
      <option value="Minuman Dingin">Minuman Dingin</option>
      <option value="minuman Hangat">Minuman Hangat</option>
      <option value="Makanan">Makanan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">URL Gambar</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="gambar" placeholder="http://google.com/picture.png">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="20">
  </div>

  <input class="mb-3" type="submit">
  
</form>
    </div>

    <div class="table">
  <table class="table  border border-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode </th>
      <th scope="col">Nama </th>
      <th scope="col">harga </th>
      <th scope="col">Satuan </th>
      <th scope="col">Kategori </th>
      <th scope="col">Jumlah </th>
      <th scope="col">Gambar </th>
      <th scope="col">Modify</th>
    </tr>
  </thead>

  <?php
  $no_urut = 0;
  $kode = 00;
  while($data = mysqli_fetch_array($querybaca))
  { $no_urut++; $kode++ ;
    $color;
    if ($data['jumlah'] < 5 ) {
      $color = "background-color: red;color: white;";
    }else {
      $color = "";
    } ?>

  <tbody>
    
    <tr>
      <th scope="row"><?php echo $no_urut; ?></th>
      <td>MD-0<?php echo $kode ?></td>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['harga'] ?></td>
      <td><?= $data['satuan'] ?></td>
      <td><?= $data['kategori'] ?></td>
      <td style="<?php echo $color ?>"><?= $data['jumlah'] ?></td>
      <td><img src="<?= $data['gambar'] ?>" alt=""></td>
      <td>  <a href="delete.php?no=<?= $data["no"];?>">Delete</a> | <a href="form_edit.php?no=<?= $data["no"];?>">Edit</a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>