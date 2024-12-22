<!DOCTYPE html>
<html>
<head>
  <title>Latihan 4b</title>
</head>
<body>
  <h2>Daftar Negara ASEAN awal:</h2>
  <ul>
    <?php
      $negara = array(
        "Indonesia",
        "Singapura",
        "Malaysia",
        "Brunei",
        "Thailand"
      );
      foreach ($negara as $n) {
        echo "<li>$n</li>";
      }
    ?>
  </ul>

  <h2>Daftar Negara ASEAN baru:</h2>
  <ul>
    <?php
      // Tambah 3 negara baru ke dalam array
      $negara[] = "Laos";
      $negara[] = "Filipina";
      $negara[] = "Myanmar";
      foreach ($negara as $n) {
        echo "<li>$n</li>";
      }
    ?>
  </ul>
</body>
</html>