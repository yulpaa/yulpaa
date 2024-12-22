<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Luas Persegi Panjang</title>
</head>
<body>

<?php
// Fungsi untuk mencari luas persegi panjang
function luas_persegi_panjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Input panjang dan lebar
$panjang = 10;
$lebar = 5;

// Hitung luas
$luas = luas_persegi_panjang($panjang, $lebar);

// Output hasil
echo "Luas Persegi Panjang dengan panjang $panjang dan lebar $lebar adalah $luas.";
?>

</body>
</html>