<?php
// Tiga digit terakhir NRP
$nrp = 123; // Ganti dengan tiga digit terakhir NRP kamu
$kategori = $nrp % 5;

// Tentukan kategori berdasarkan tiga digit terakhir NRP
switch ($kategori) {
    case 1:
        $judul = "Budaya Daerah di Indonesia";
        $data = array(
            array("Nama" => "Batik", "Asal" => "Jawa", "Tahun" => 2009, "Deskripsi" => "Pakaian Tradisional", "Gambar" => "batik.jpg"),
            array("Nama" => "Wayang", "Asal" => "Jawa", "Tahun" => 2003, "Deskripsi" => "Pertunjukan boneka", "Gambar" => "wayang.jpg"),
            array("Nama" => "Tari Kecak", "Asal" => "Bali", "Tahun" => 1930, "Deskripsi" => "Tarian ritual", "Gambar" => "kecak.jpg"),
            array("Nama" => "Angklung", "Asal" => "Jawa Barat", "Tahun" => 2010, "Deskripsi" => "Alat musik bambu", "Gambar" => "angklung.jpg"),
            array("Nama" => "Reog", "Asal" => "Ponorogo", "Tahun" => 1980, "Deskripsi" => "Tari topeng singa", "Gambar" => "reog.jpg")
        );
        break;
    case 2:
        $judul = "Penemu-Penemu Terkenal di Dunia";
        $data = array(
            array("Nama" => "Albert Einstein", "Penemuan" => "Teori Relativitas", "Tahun" => 1905, "Deskripsi" => "Fisikawan teoritis", "Gambar" => "einstein.jpg"),
            array("Nama" => "Thomas Edison", "Penemuan" => "Lampu Pijar", "Tahun" => 1879, "Deskripsi" => "Penemu dan pengusaha", "Gambar" => "edison.jpg"),
            array("Nama" => "Nikola Tesla", "Penemuan" => "Arus Bolak-balik", "Tahun" => 1888, "Deskripsi" => "Insinyur listrik", "Gambar" => "tesla.jpg"),
            array("Nama" => "Marie Curie", "Penemuan" => "Radioaktivitas", "Tahun" => 1898, "Deskripsi" => "Fisika dan kimiawan", "Gambar" => "curie.jpg"),
            array("Nama" => "Alexander Graham Bell", "Penemuan" => "Telepon", "Tahun" => 1876, "Deskripsi" => "Ilmuwan dan penemu", "Gambar" => "bell.jpg")
        );
        break;
    case 3:
        $judul = "Flora dan Fauna Terancam Punah";
        $data = array(
            array("Nama" => "Harimau Sumatra", "Habitat" => "Sumatra", "Populasi" => 400, "Deskripsi" => "Hewan langka Indonesia", "Gambar" => "harimau_sumatra.jpg"),
            array("Nama" => "Orangutan", "Habitat" => "Kalimantan dan Sumatra", "Populasi" => 104700, "Deskripsi" => "Primata besar Asia", "Gambar" => "orangutan.jpg"),
            array("Nama" => "Badak Jawa", "Habitat" => "Taman Nasional Ujung Kulon", "Populasi" => 74, "Deskripsi" => "Satu spesies badak paling langka", "Gambar" => "badak_jawa.jpg"),
            array("Nama" => "Elang Jawa", "Habitat" => "Jawa", "Populasi" => 300, "Deskripsi" => "Burung pemangsa terancam punah", "Gambar" => "elang_jawa.jpg"),
            array("Nama" => "Komodo", "Habitat" => "Nusa Tenggara", "Populasi" => 3000, "Deskripsi" => "Kadal terbesar di dunia", "Gambar" => "komodo.jpg")
        );
        break;
    case 4:
        $judul = "Pahlawan Nasional Indonesia";
        $data = array(
            array("Nama" => "Soekarno", "Lahir" => 1901, "Wafat" => 1970, "Deskripsi" => "Proklamator kemerdekaan", "Gambar" => "soekarno.jpg"),
            array("Nama" => "Cut Nyak Dien", "Lahir" => 1848, "Wafat" => 1908, "Deskripsi" => "Pahlawan wanita Aceh", "Gambar" => "cut_nyak_dien.jpg"),
            array("Nama" => "Jenderal Sudirman", "Lahir" => 1916, "Wafat" => 1950, "Deskripsi" => "Pahlawan perang gerilya", "Gambar" => "sudirman.jpg"),
            array("Nama" => "Raden Dewi Sartika", "Lahir" => 1884, "Wafat" => 1947, "Deskripsi" => "Tokoh pendidikan wanita", "Gambar" => "dewi_sartika.jpg"),
            array("Nama" => "Ki Hajar Dewantara", "Lahir" => 1889, "Wafat" => 1959, "Deskripsi" => "Bapak pendidikan nasional", "Gambar" => "ki_hajar.jpg")
        );
        break;
    default:
        $judul = "Perusahaan Teknologi";
        $data = array(
            array("Nama" => "Google", "Didirikan" => 1998, "Pendiri" => "Larry Page & Sergey Brin", "Deskripsi" => "Mesin pencari internet", "Gambar" => "google.jpg"),
            array("Nama" => "Apple", "Didirikan" => 1976, "Pendiri" => "Steve Jobs & Steve Wozniak", "Deskripsi" => "Perusahaan teknologi", "Gambar" => "apple.jpg"),
            array("Nama" => "Microsoft", "Didirikan" => 1975, "Pendiri" => "Bill Gates & Paul Allen", "Deskripsi" => "Perusahaan perangkat lunak", "Gambar" => "microsoft.jpg"),
            array("Nama" => "Amazon", "Didirikan" => 1994, "Pendiri" => "Jeff Bezos", "Deskripsi" => "E-commerce dan cloud", "Gambar" => "amazon.jpg"),
            array("Nama" => "Tesla", "Didirikan" => 2003, "Pendiri" => "Elon Musk", "Deskripsi" => "Kendaraan listrik", "Gambar" => "tesla.jpg")
        );
        break;
}

// Menampilkan data dalam bentuk tabel
echo "<h2>$judul</h2>";
echo "<table border='1'>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
        </tr>";
foreach ($data as $item) {
    echo "<tr>
            <td>" . $item['Nama'] . "</td>
            <td>" . $item['Deskripsi'] . "</td>
            <td><img src='" . $item['Gambar'] . "' width='100'></td>
          </tr>";
}
echo "</table>";
?>