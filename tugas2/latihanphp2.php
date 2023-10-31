<!-- <?php
//   $nama_saya="Amir";
  ?> -->

    <!-- <?php
    // echo "<h3>soal a = 5, b = 4  </br> </h3>";
    // $a = 5;
    // $b = 4;
    // $c = $a + $b;
    // echo "hasil dari a + b adalah : $c </br>";

    // $a = 5;
    // $b = 4;
    // $c = $a - $b;
    // echo "hasil dari a - b adalah : $c </br>";

    // $a = 5;
    // $b = 4;
    // $c = $a * $b;
    // echo "hasil dari a * b adalah : $c </br>";
    // echo "<h1><center>Hello $nama_saya</center></h1>";
    ?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
  <h1>Toko Wayang Kami</h1>
    <p>Program Aplikasi Sederhana Untuk Menghitung Penjualan Barang Toko Wayang Kami</p>
    
<form method="POST" name="penjualan">
    <div class="mb-3">
      <label for="ExampleInputnama" class="form-label">nama barang</label>
      <input type="text" name="nm_brg" class="form-control" placeholder="masukan nama barang">
    </div>

    <div class="mb-3">
      <label for="ExampleInputharga" class="form-label">harga barang</label>
      <input type="text" name="hrg_brg" class="form-control" placeholder="masukan harga barang">
    </div>
    <div class="mb-3">
      <label for="ExampleInputjumlah" class="form-label">jumlah barang</label>
      <input type="text" name="jml_brg" class="form-control" placeholder="masukan jumlah barang">
    </div>
  <button type="submit" class="btn btn-primary mb-2" name="submit">Hitung</button>
</form>
</div><br>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!-- php -->
<?php
    if(isset($_POST['submit'])){
      $brg = $_POST['nm_brg'];
      $hrg = $_POST['hrg_brg'];
      $jml = $_POST['jml_brg'];

      echo "<div class ='container'>";
      echo "<h3>Jumlah yang harus dibayar</h3></br>";

      $barang = $jml * $hrg;
      $diskon = $barang * 0.05;
      $total = $barang - $diskon;

      echo "nama barang : $brg </br>";
      echo "harga barang : $hrg </br>";
      echo "jumlah barang : $jml </br>";
      echo "diskon : 5% </br>";
      echo "<h3 class ='text-md-start'>Rp.$total</h3>";
    }
    ?>