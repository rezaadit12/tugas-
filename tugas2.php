<!DOCTYPE html>
<html lang="en">
<body>
<form action="tugas2.php" method="post">
<link rel="stylesheet" type="text/css" href="style.css">
  <h1>BIOGRAFI SISWA</h1>
    Nama<br><input type="text" name="nama"><br>
    Alamat<br><input type="text" name="alamat"><br>
    Tanggal lahir<br><input type="date" name="date"><br>
    Umur<br><input type="text" name="umur"><br>
    Sekolah<br><input type="text" name="sekolah"><br>
    Rombel<br><input type="text" name="rombel"><br>
    <hr>
    <h1>NILAI SISWA</h1>
    PRODUKTIF<br> <input type="text" name="nilai1" min="1" max="100"><br>
    MATEMATIKA<br> <input type="text" name="nilai2" min="1" max="100"><br>
    INDONESIA<br> <input type="text" name="nilai3" min="1" max="100"><br>
    INGGRIS<br> <input type="text" name="nilai4" min="1" max="100"><br>
    INFORMATIKA<br> <input type="text" name="nilai5" min="1" max="100"><br>
    SEJARAH<br> <input type="text" name="nilai6" min="1" max="100"><br>
    SUNDA<br> <input type="text" name="nilai7" min="1" max="100"><br>
    <input type="submit" name="submit">
    <br>
</form>    

<?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tanggalLahir = $_POST["date"];
    $umur = $_POST["umur"];
    $sekolah = $_POST["sekolah"];
    $rombel = $_POST["rombel"];

   
    echo "<br> Nama :  " .$nama ."<br>";
    echo "Alamat :  " . $alamat ."<br>";
    echo "Tanggal lahir :   " . $tanggalLahir ."<br>";
    echo "Umur :  " . $umur ;
    if ($umur < 15){
        echo " Tahun <br>";
      //  } else {
      //   echo " Tahun <br>";
      //  } 
       
    echo "<br>";
    echo "Sekolah :  " . $sekolah ."<br>";
    echo "Rombel :  " . $rombel ."<br>";
  }

  if (isset($_POST['submit'])){
   $produktif = $_POST['nilai1'];
   $matematika = $_POST['nilai2'];
   $indonesia = $_POST['nilai3'];
   $inggris = $_POST['nilai4'];
   $produktif = $_POST['nilai5'];
   $sejarah = $_POST['nilai6'];
   $sunda = $_POST['nilai7'];
   $jumlah = $produktif + $matematika + $indonesia + $inggris + $produktif + $sejarah + $sunda;
   $rata = $jumlah / 7;
   echo "Rata rata : " .$rata;
   echo "<br>";
   echo "Terendah : ";
   echo min ($produktif, $matematika, $indonesia, $inggris, $produktif, $sejarah, $sunda);
   echo "<br>Tertinggi : ";
   echo max($produktif, $matematika, $indonesia, $inggris, $produktif, $sejarah, $sunda);
  }
?>

<br>

<h2>Nama kelompok: </h2><br>
<ul>
  <li>Muhammad Fachril Ramadhan (PPLG X-4)</li>
  <li>Muhammad Naufal Ghaisani (PPLG X-4) </li>
  <li>Muhamad Reza Aditya (PPLG X-1)</li>
  <li>Hendra Rusmana Putra (PPLG X-1)</li>
  <li>Raichan Dinta Ramdhan (PPLG X-1)</li>
</ul>
</body>
</html>