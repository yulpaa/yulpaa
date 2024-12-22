<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penentu Nilai Mahasiswa</title>
</head>
<body>

<h2>Sistem Penentu Keputusan Nilai Mahasiswa</h2>

<form method="POST" action="">
    Nama Mahasiswa: <input type="text" name="nama_mahasiswa" required><br><br>
    Ujian Tengah Semester (UTS): <input type="number" name="uts" min="0" max="100" required><br><br>
    Tugas Mandiri: <input type="number" name="tugas" min="0" max="100" required><br><br>
    Ujian Akhir Semester (UAS): <input type="number" name="uas" min="0" max="100" required><br><br>
    <input type="submit" name="submit" value="Hitung Nilai">
</form>

?>
<?php
if (isset($_POST['submit'])) {
    // Mengambil data input dari form
    $nama = $_POST['nama_mahasiswa'];
    $uts = $_POST['uts'];
    $tugas = $_POST['tugas'];
    $uas = $_POST['uas'];

    // Menghitung nilai akhir
    $nilai_akhir = ($uts + $tugas + $uas) / 3;

    // Menentukan nilai huruf dan status kelulusan
    if ($nilai_akhir >= 90) {
        $nilai_huruf = "A";
        $status = "Lulus";
    } elseif ($nilai_akhir >= 80) {
        $nilai_huruf = "B";
        $status = "Lulus";
    } elseif ($nilai_akhir >= 70) {
        $nilai_huruf = "C";
        $status = "Lulus";
    } else {
        $nilai_huruf = "D";
        $status = "Tidak Lulus";
    }
 // Menampilkan hasil
 echo "<h3>Hasil:</h3>";
 echo "Nama Mahasiswa: $nama<br>";
 echo "Nilai Akhir: " . round($nilai_akhir, 2) . "<br>";
 echo "Nilai Huruf: $nilai_huruf<br>";
 echo "Status: $status<br>";
}
?>

</body>
</html>