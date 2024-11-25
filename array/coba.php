<?php
$novel = [
    ["No_Urut" => "1", "Judul" => "Laskar Pelangi", "Genre" => "Drama", "Penulis" => "Andrea Hirata", "Penerbit" => "Bentang Pustaka", "Tahun_Rilis" => "2005"],
    ["No_Urut" => "2", "Judul" => "Perahu Kertas", "Genre" => "Romantis", "Penulis" => "Dee Lestari", "Penerbit" => "Bentang Pustaka", "Tahun_Rilis" => "2009"],
    ["No_Urut" => "3", "Judul" => "Bumi Manusia", "Genre" => "Sejarah, Drama", "Penulis" => "Pramoedya Ananta Toer", "Penerbit" => "Hasta Mitra", "Tahun_Rilis" => "1980"],
    ["No_Urut" => "4", "Judul" => "Ayat-Ayat Cinta", "Genre" => "Romantis Religi", "Penulis" => "Habiburrahman El Shirazy", "Penerbit" => "Republika", "Tahun_Rilis" => "2004"],
    ["No_Urut" => "5", "Judul" => "Supernova: Ksatria, Putri, dan Bintang Jatuh", "Genre" => "Fiksi Ilmiah, Filsafat", "Penulis" => "Dee Lestari", "Penerbit" => "Truedee Books", "Tahun_Rilis" => "2001"],
    ["No_Urut" => "6", "Judul" => "9 Summers 10 Autumns", "Genre" => "Otobiografi, Drama", "Penulis" => "Iwan Setyawan", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2011"],
    ["No_Urut" => "7", "Judul" => "Dilan: Dia Adalah Dilanku Tahun 1990", "Genre" => "Romantis", "Penulis" => "Pidi Baiq", "Penerbit" => "Pastel Books", "Tahun_Rilis" => "2014"],
    ["No_Urut" => "8", "Judul" => "Hujan", "Genre" => "Fiksi Ilmiah, Romantis", "Penulis" => "Tere Liye", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2016"],
    ["No_Urut" => "9", "Judul" => "Pulang", "Genre" => "Drama", "Penulis" => "Leila S. Chudori", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2012"],
    ["No_Urut" => "10", "Judul" => "Orang-Orang Biasa", "Genre" => "Drama, Sosial", "Penulis" => "Andrea Hirata", "Penerbit" => "Bentang Pustaka", "Tahun_Rilis" => "2019"],
    ["No_Urut" => "11", "Judul" => "Ronggeng Dukuh Paruk", "Genre" => "Sejarah, Sosial", "Penulis" => "Ahmad Tohari", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "1982"],
    ["No_Urut" => "12", "Judul" => "Cantik Itu Luka", "Genre" => "Drama, Sejarah", "Penulis" => "Eka Kurniawan", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2002"],
    ["No_Urut" => "13", "Judul" => "Gadis Kretek", "Genre" => "Fiksi Sejarah", "Penulis" => "Ratih Kumala", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2012"],
    ["No_Urut" => "14", "Judul" => "Rectoverso", "Genre" => "Romantis, Filsafat", "Penulis" => "Dee Lestari", "Penerbit" => "Goodfaith Production", "Tahun_Rilis" => "2008"],
    ["No_Urut" => "15", "Judul" => "Lelaki Harimau", "Genre" => "Drama, Thriller", "Penulis" => "Eka Kurniawan", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2004"],
    ["No_Urut" => "16", "Judul" => "Sabtu Bersama Bapak", "Genre" => "Drama Keluarga", "Penulis" => "Adhitya Mulya", "Penerbit" => "Gagas Media", "Tahun_Rilis" => "2014"],
    ["No_Urut" => "17", "Judul" => "O", "Genre" => "Satire, Fabel", "Penulis" => "Eka Kurniawan", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2016"],
    ["No_Urut" => "18", "Judul" => "Tentang Kamu", "Genre" => "Drama", "Penulis" => "Tere Liye", "Penerbit" => "Republika Penerbit", "Tahun_Rilis" => "2016"],
    ["No_Urut" => "19", "Judul" => "Sunset Bersama Rosie", "Genre" => "Romantis, Drama", "Penulis" => "Tere Liye", "Penerbit" => "Republika", "Tahun_Rilis" => "2008"],
    ["No_Urut" => "20", "Judul" => "Negeri 5 Menara", "Genre" => "Drama Pendidikan", "Penulis" => "Ahmad Fuadi", "Penerbit" => "Gramedia Pustaka Utama", "Tahun_Rilis" => "2009"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Daftar Novel</h2>

<table>
    <tr>
        <th>No Urut</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Rilis</th>
    </tr>
    <?php foreach ($novel as $nvl): ?>
    <tr>
        <td><?php echo $nvl['No_Urut']; ?></td>
        <td><?php echo $nvl['Judul']; ?></td>
        <td><?php echo $nvl['Genre']; ?></td>
        <td><?php echo $nvl['Penulis']; ?></td>
        <td><?php echo $nvl['Penerbit']; ?></td>
        <td><?php echo $nvl['Tahun_Rilis']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>