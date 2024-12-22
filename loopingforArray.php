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
    <h1>Daftar Nama</h1>
    <ul>
        <?php
            for ($i = 0; $i < count($nama); $i++) { 
                echo "<li>" . $nama[$i] . "</li>";
            }
        ?>
    </ul>
</body>
</html>
