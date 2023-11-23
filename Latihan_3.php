<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Toko Wayang Kami</title>
  </head>
  <body>
    <div class = 'container'>
    <form action="" method="POST" name="Penjualan">
    <h1><center>Nilai Kelulusan</center></h1>
    <p><strong><center>Data Setiap Siswa </center></strong></p><hr>
    
    
  <div class="form-group">
    <label for="exampleInputName">Nama Siswa</label>
    <input type="text" class="form-control" name="ns" placeholder="Wajib Di isi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kelas</label>
    <input type="text" class="form-control" name="kl" placeholder="Wajib Di isi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nilai Produktiv</label>
    <input type="int" class="form-control" name="np" placeholder="Wajib Di isi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nilai Adaktiv</label>
    <input type="int" class="form-control" name="na" placeholder="Wajib Di isi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mulok</label>
    <input type="int" class="form-control" name="ml" placeholder="Wajib Di isi">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Jumlah</button>
</form>
</div>
<hr>

<?php
if(isset($_POST['submit'])){
$namasiswa = $_POST['ns'];
$kelas = $_POST['kl'];
$nilai_a = $_POST['np'];
$nilai_b = $_POST['na'];
$nilai_c= $_POST['ml'];
$total = $nilai_a * $nilai_b * $nilai_c;
$rata = $total / 3;

if($nilai_a > 90){
    $gradeA = "A";
}elseif($nilai_a > 80){
    $gradeA = "B";
}elseif($nilai_a > 70){
    $gradeA = "C";
}elseif($nilai_a > 60){
    $gradeA = "D";
}elseif($nilai_a > 50){
    $gradeA = "E";
}

if($nilai_b > 90){
    $gradeB = "A";
}elseif($nilai_b > 80){
    $gradeB = "B";
}elseif($nilai_b > 70){
    $gradeB = "C";
}elseif($nilai_b > 60){
    $gradeB = "D";
}elseif($nilai_b > 50){
    $gradeB = "E";
}

if($nilai_c > 90){
    $gradeC = "A";
}elseif($nilai_c > 80){
    $gradeC = "B";
}elseif($nilai_c > 70){
    $gradeC = "C";
}elseif($nilai_c > 60){
    $gradeC = "D";
}elseif($nilai_c > 50){
    $gradeC = "E";
}

$ketA = $nilai_a >=70 ? "Lulus" : "Tidak Lulus";
$ketB = $nilai_b >=70 ? "Lulus" : "Tidak Lulus";
$ketC = $nilai_c >=70 ? "Lulus" : "Tidak Lulus";
$ketAll = $rata >=70 ? "Lulus" : "Tidak Lulus";

 echo "<div class = 'container'>
 <h4> nama : $namasiswa </h4>
   <br>
   <h4> kelas : $kelas </h4>
   <br>
<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Nama</th>
      <th scope='col'>Kelas</th>
      <th scope='col'>Nilai Produktiv</th>
      <th scope='col'>Nilai Adaktiv</th>
      <th scope='col'>Mulok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>$nilai_a</td>
      <td>$nilai_b</td>
      <td>$nilai_c</td>
      <td>$gradeA</td>
      <td>$ketA</td>
    </tr>
    <tr>
      <td>$nilai_a</td>
      <td>$nilai_b</td>
      <td>$nilai_c</td>
      <td>$gradeB</td>
      <td>$ketB</td>
    </tr>
    <tr>
      <td>$nilai_a</td>
      <td>$nilai_b</td>
      <td>$nilai_c</td>
      <td>$gradeC</td>
      <td>$ketC</td>
    </tr>
  </tbody>
</table>
</div>

<div><h4> Nilai Rata - Rata : </h4></div>
<h4>$ketAll</h4>
<div></div>
";
}
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>