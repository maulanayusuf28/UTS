
<?php

  // Menangkapisivariabeldariform.php
  $nmWilayah = $_POST['nmWilayah'];
  $jmlpositif= $_POST['jmlpositif'];
  $jmlrawat = $_POST['jmlrawat'];
  $jmlsembuh = $_POST['jmlsembuh'];
  $jmlmeninggal = $_POST['jmlmeninggal'];
  $operator = $_POST['operator'];
  $nim = $_POST['nim'];

  
 
  // Format data yang akandiparsing
  date_default_timezone_set('Asia/Jakarta');
   $hari = date('l d F Y, H:i:s');
   $data = "\n                Data Pantauan covid wilayah $nmWilayah
                  Per $hari  
                    $operator | $nim
____________________________________________________________________________
  positif      |      Dirawat      |      Sembuh      |      Meninggal      |
_______________|___________________|__________________|_____________________|
  $jmlpositif      |      $jmlrawat        |      $jmlsembuh     |    $jmlmeninggal            |           
_______________|___________________|__________________|_____________________|";

  // Buka file data.txt, kemudiantuliskanisivariabel di ataskedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  

 // Keteranganbila data berhasildiinput
 print "Data sudah dimasukan.</br><a href='form.php'>Kembali ke awal >></a>";

?>