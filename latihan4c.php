<?php
// Membuat associative array untuk negara-negara ASEAN dan ibukotanya
$negara_asean = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

// Menampilkan daftar negara dan ibukotanya menggunakan foreach
echo "<h2> Daftar Negara ASEAN dan Ibukota:<br><ul></h2>";
foreach ($negara_asean as $negara => $ibukota) {
    echo "<li>" . $negara . " : " . $ibukota . "</li>";
}
echo"</ul>";
?>