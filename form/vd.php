<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="" method="post">
        <h2><b>Form Bilangan</b></h2>
        <table>
            <tr>
                <td>Masukan Bilangan</td>
                <td>:</td>
                <td><input type="text" name="bilangan" value=""></td>
            </tr>
            <tr>
                <td>Jenis Bilangan</td>
                <td>:</td>
                <td>
                    <select name="jenis_bilangan" id="">
                        <option value="kelipatan3">Kelipatan 3</option>
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                        <option value="besarkekecil">Dari Besar Kekecil</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="Simpan"></td>
            </tr>
        </table>
    </form>
</center>

<?php
if (isset($_POST['kirim'])) {
    $bilangan = $_POST['bilangan'];
    $jenis = $_POST['jenis_bilangan'];

    // Cek apakah input valid
    if (is_numeric($bilangan)) {
        echo "<h3>Hasil:</h3>";

        // Jika kelipatan 3
        if ($jenis == "kelipatan3") {
            if ($bilangan % 3 == 0) {
                echo "$bilangan adalah kelipatan 3.";
            } else {
                echo "$bilangan bukan kelipatan 3.";
            }
        }

        // Jika ganjil
        elseif ($jenis == "ganjil") {
            if ($bilangan % 2 != 0) {
                echo "$bilangan adalah bilangan ganjil.";
            } else {
                echo "$bilangan bukan bilangan ganjil.";
            }
        }

        // Jika genap
        elseif ($jenis == "genap") {
            if ($bilangan % 2 == 0) {
                echo "$bilangan adalah bilangan genap.";
            } else {
                echo "$bilangan bukan bilangan genap.";
            }
        }

        // Jika dari besar ke kecil (fitur ini perlu logika tambahan, misalnya input lebih dari satu bilangan)
        elseif ($jenis == "besarkekecil") {
            // Logika pengurutan dari besar ke kecil akan ditambahkan sesuai kebutuhan
            echo "Fitur ini membutuhkan lebih dari satu bilangan.";
        }
    } else {
        echo "Input harus berupa bilangan.";
    }
}
?>
</body>
</html>