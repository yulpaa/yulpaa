<!DOCTYPE html>
<html>
<head>
  <title>Kotak Bertingkat</title>
  <style>
    .kotak {
      width: 30px;
      height: 30px;
      border: 1px solid black;
      display: inline-block;
      text-align: center;
      line-height: 30px;
    }
  </style>
</head>
<body>
  <?php
  // Tentukan jumlah baris
  $jumlahBaris = 5;
  // Looping untuk setiap baris
  for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
    // Looping untuk setiap kolom (1 sampai nomor baris saat ini)
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
      echo "<div class='kotak'>$kolom</div>";
    }
    echo "<br>"; 
  }
  ?>
</body>
</html>