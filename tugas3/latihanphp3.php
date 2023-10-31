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
    <h1>Web Kelulusan</h1>
    <form action="" method="POST" name="penilaian">
  <div class="mb-3">
      <label for="ExampleInputnama" class="form-label">nama</label>
      <input type="text" name="nm" class="form-control" placeholder="masukan nama">
    </div> 
    <div class="mb-3">
      <label for="ExampleInputkelas" class="form-label">kelas</label>
      <input type="text" name="kls" class="form-control" placeholder="masukan kelas">
    </div>

    <div class="mb-3">
      <label for="ExampleInputproduktif" class="form-label">nilai pruduktif</label>
      <input type="text" name="nilai_p" class="form-control" placeholder="masukan nilai produktif">
    </div>
    <div class="mb-3">
      <label for="ExampleInputumum" class="form-label">nilai umum</label>
      <input type="text" name="nilai_u" class="form-control" placeholder="masukan nilai umum">
    </div>
    <div class="mb-3">
      <label for="ExampleInputmulok" class="form-label">nilai mulok</label>
      <input type="text" name="nilai_mulok" class="form-control" placeholder="masukan nilai mulok">
    </div>
    <button type="submit" class="btn btn-primary mb-2" name="submit">proses</button>
  </div>
  </form>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nm'];
        $kelas = $_POST['kls'];
        $nilai_P = $_POST['nilai_p'];
        $nilai_U = $_POST['nilai_u'];
        $nilai_M = $_POST['nilai_mulok'];

        $nilaiP = $nilai_P;
        if($nilaiP > 90){
            $gradep ="A";
            $ketp = "lulus";
        }elseif($nilaiP > 80){
            $gradep = "B";
            $ketp = "lulus";
        }elseif($nilaiP > 70){
            $gradep = "C";
            $ketp = "lulus";
        }elseif($nilaiP > 60){
            $gradep = "D";
            $ketp = "tidak lulus";
        }elseif($nilaiP > 50){
            $gradep = "E";
            $ketp = "tidak lulus";
        }

        $nilaiU = $nilai_U;
        if($nilaiU > 90){
            $gradeu ="A";
            $ketu = "lulus";
        }elseif($nilaiU > 80){
            $gradeu = "B";
            $ketu = "lulus";
        }elseif($nilaiU > 70){
            $gradeu = "C";
            $ketu = "lulus";
        }elseif($nilaiU > 60){
            $gradeu = "D";
            $ketu = "tidak lulus";
        }elseif($nilaiU> 50){
            $gradeu = "E";
            $ketu = "tidak lulus";
        }

        $nilai_M;
        if($nilai_M > 90){
            $gradel ="A";
            $ketl = "lulus";
        }elseif($nilai_M > 80){
            $gradel = "B";
            $ketl = "lulus";
        }elseif($nilai_M > 70){
            $gradel = "C";
            $ketl = "lulus";
        }elseif($nilai_M > 60){
            $gradel = "D";
            $ketl = "tidak lulus";
        }elseif($nilai_M> 50){
            $gradel = "E";
            $ketl = "tidak lulus";    
        }    
        $rata_rata =($nilaiP+$nilaiU+$nilai_M) / 3;
?>

<div class="container">
<div class="card" style="width: 50rem;">
  <div class="card-header">
    <h4><strong>Nama :<?php echo $nama?></strong></h4>
    <h4><strong>Kelas :<?php echo $kelas?></strong></h4>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">

        <table class="table">
  <thead>
    <tr>
       <th scope="col"><strong>no</strong></th>     
       <th scope="col"><strong>mapel</strong></th>
       <th scope="col"><strong>grade</strong></th>
       <th scope="col"><strong>keterangan</strong></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>produktif</td>
      <td><?php echo $nilaiP?></td>
      <td><?php echo $gradep?></td>
      <td><?php echo $ketp?></td>
    </tr>

    <tr>
    <th scope="row">2</th>
      <td>umum</td>
      <td><?php echo $nilaiU?></td>
      <td><?php echo $gradeu?></td>
      <td><?php echo $ketu?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>mulok</td>
      <td><?php echo $nilai_M ?></td>
      <td><?php echo $gradel ?></td>
      <td><?php echo $ketl ?></td>
    </tr>
    <tr>
    <td colspan="4">nilai rata-rata</td>
    <td><?php echo $rata_rata?></td>
    </tr>

  </tbody>
</table>
    </li>
  </ul>
</div>
</div>
<?php } ?>
  </body>
</html>