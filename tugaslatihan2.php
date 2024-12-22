<?php

// Fungsi untuk menghitung nilai akhir
function hitung_nilai_akhir($tugas_mandiri, $uas, $uts) {
  $nilai_akhir = ($tugas_mandiri + $uas + $uts) / 3;
  return $nilai_akhir;
}

// Fungsi untuk menentukan ketentuan nilai
function ketentuan_nilai($nilai_akhir) {
  if ($nilai_akhir >= 90) {
    return "Nilai Huruf = A";
  } elseif ($nilai_akhir >= 80) {
    return "Nilai Huruf = B";
  } elseif ($nilai_akhir >= 70) {
    return "Nilai Huruf = C";
  } elseif ($nilai_akhir >= 60) {
    return "Nilai Huruf = D";
  } else {
    return "Status = Tidak Lulus";
  }
}

// Input nilai tugas mandiri, UAS, dan UTS
$tugas_mandiri = 80;
$uas = 90;
$uts = 85;

// Hitung nilai akhir
$nilai_akhir = hitung_nilai_akhir($tugas_mandiri, $uas, $uts);

// Tentukan ketentuan nilai
$ketentuan = ketentuan_nilai($nilai_akhir);

// Tampilkan hasil
echo "Nilai Akhir: $nilai_akhir<br>";
echo "Ketentuan Nilai: $ketentuan";

?>