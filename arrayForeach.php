<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhani", "Erwin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping for array</title>
</head>
<body>
    <?php

      foreach ($nama as $absen) 
         echo "<li>$absen</li>";

    ?>
</body>
</html>