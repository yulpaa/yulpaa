<?php
$negara = array(
    array("Indonesia", "D.K.I. Jakarta", "+62"),
    array("Singapura", "Singapura", "+65"),
    array("Malaysia", "Kuala Lumpur", "+60"),
    array("Brunei", "Bandar Seri Begawan", "+673"),
    array("Thailand", "Bangkok", "+66"),
    array("Laos", "Vientiane", "+856"),
    array("Filipina", "Manila", "+63"),
    array("Myanmar", "Naypyidaw", "+95")
);

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>