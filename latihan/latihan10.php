<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Seblak Ceu Iroh</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Seblak Ceu Iroh</h2>
            <table>
                <tr>
                    <td>Nama Pembeli</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
               
                <tr>
                    <td>Tanggal Beli</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value=""></td>
                </tr>
                <tr>
                    <td>Makanan</td>
                    <td>:</td>
                    <td><select name="makanan">
                        <option value="seblak">Seblak Ceker</option>
                        <option value="cilok">Cilok Goang</option>
                        <option value="cimol">Cimol Bojot</option>
                        <option value="makroni">Makroni Seuhah</option>
                        <option value="pentol">Pentol</option>
                    </select></td>
                </tr>
                
                <tr>
                    <td>Qty Makanan</td>
                    <td>:</td>
                    <td><input type="number" name="qty1" value="" min="1"></td>
                </tr>

                <tr>
                    <td>Minuman</td>
                    <td>:</td>
                    <td><select name="minuman">
                        <option value="air">Air Mineral</option>
                        <option value="teh">Teh Manis</option>
                        <option value="jus">Jus</option>
                        <option value="lemon">Lemon Tea</option>
                        <option value="thai">Thai Tea</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Qty Minuman</td>
                    <td>:</td>
                    <td><input type="number" name="qty2" value="" min="1"></td>
                </tr>

                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td><input type="radio" name="bayar" value="Cash">Cash 
                        <input type="radio" name="bayar" value="Qris">Qris</td>
                </tr>
                <tr>
                    <td>Tunai</td>
                    <td>:</td>
                    <td><input type="text" name="tunai" value=""></td>
                </tr>
              
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Kirim"></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['kirim'])) { 
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $makanan = $_POST['makanan'];
    $qty_makanan = $_POST['qty1'];
    $minuman = $_POST['minuman'];
    $qty_minuman = $_POST['qty2'];
    $pembayaran = $_POST['bayar'];
    $tunai= $_POST['tunai'];

    // Harga makanan
    if ($makanan == 'seblak') {
        $harga_makanan = 10000;
    } elseif ($makanan == 'cilok') {
        $harga_makanan = 18000;
    } elseif ($makanan == 'cimol') {
        $harga_makanan = 30000;
    } elseif ($makanan == 'makroni') {
        $harga_makanan = 40000;
    } elseif ($makanan == 'pentol') {
        $harga_makanan = 45000;
    }

    // Harga minuman
    if ($minuman == 'air') {
        $harga_minuman = 5000;
    } elseif ($minuman == 'teh') {
        $harga_minuman = 10000;
    } elseif ($minuman == 'jus') {
        $harga_minuman = 15000;
    } elseif ($minuman == 'lemon') {
        $harga_minuman = 20000;
    } elseif ($minuman == 'thai') {
        $harga_minuman = 25000;
    }

    // Total harga
    $total = ($harga_makanan * $qty_makanan) + ($harga_minuman * $qty_minuman);

    // Diskon jika total lebih dari 50,000
    $diskon = 0;
    if ($total > 50000) {
        $diskon = $total * 0.1;
    }

    // Bonus jika pembayaran menggunakan Qris
    $bonus = 0;
    if ($pembayaran == 'Qris') {
        $bonus = 20000;
    }
  
    // Total pembayaran akhir
$total_pembayaran = $total - ($diskon + $bonus);

// Ubah 'tunai' ke tipe integer untuk perhitungan
$tunai = intval($tunai);

// Hitung kembalian atau kondisi lainnya
if ($tunai == $total_pembayaran) {
    $pesan_kembalian = "Uang Anda pas.";
} elseif ($tunai < $total_pembayaran) {
    $kembalian_kurang = $total_pembayaran - $tunai;
    $pesan_kembalian = "Maaf, uang Anda kurang Rp" . number_format($kembalian_kurang, 0, ',', '.');
} else {
    $kembalian = $tunai - $total_pembayaran;
    $pesan_kembalian = "Rp " . number_format($kembalian, 0, ',', '.');
}


    // Cetak struk
    echo"==========================================<br>";
    echo "-- Seblak Ceu Iroh --<br>";
    echo "Jl.Cibaduyut No.103 <br>";
    echo "Telp:081234256927<br>";
    echo"==========================================<br>";
    echo "<table style='border-spacing: 0px; text-align: left;'>";
    echo "<tr><td>Nama Pembeli</td> <td>:</td> <td>" . $nama . "</td></tr>";
    echo "<tr><td>Tanggal Beli</td> <td>:</td> <td>" . $tanggal . "</td></tr>";
    echo "<tr><td>Makanan</td> <td>:</td> <td>" . $makanan . "</td></tr>";
    echo "<tr><td>Harga Makanan</td> <td>:</td> <td>" . number_format($harga_makanan, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Qty</td> <td>:</td> <td>" . $qty_makanan . "</td></tr>";
    echo "<tr><td>Minuman</td> <td>:</td> <td>" . $minuman . "</td></tr>";
    echo "<tr><td>Harga Minuman</td> <td>:</td> <td>" . number_format($harga_minuman, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Qty</td> <td>:</td> <td>" . $qty_minuman . "</td></tr>";
    echo "<tr><td>Pembayaran</td> <td>:</td> <td>" . $pembayaran . "</td></tr>";
    echo"<tr><td colspan='5'>------------------------------------------------------------------------------------------</td></tr>";
    echo "<tr><td>Total</td> <td>:</td> <td>" . number_format($total, 0, ',', '.') . "</td></tr>";
    echo"<tr><td colspan='5'>------------------------------------------------------------------------------------------</td></tr>";
    echo "<tr><td>Diskon</td> <td>:</td> <td>" . number_format($diskon, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Bonus Pembayaran</td> <td>:</td> <td>" . number_format($bonus, 0, ',', '.') . "</td></tr>";
    echo"<tr><td colspan='5'>------------------------------------------------------------------------------------------</td></tr>";     
    echo "<tr><td>Total Yang Harus Anda Bayar</td> <td>:</td> <td>" . number_format($total_pembayaran, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Uang Anda</td> <td>:</td> <td>" . number_format($tunai, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Kembalian</td> <td>:</td> <td>" . $pesan_kembalian . "</td></tr>";
    echo "</table><br><br>";

    echo"Terimakasih Atas Kunjungan Anda<br>";
    echo"Semoga Anda Puas Dengan Layanan Kami<br>";
    echo"-----------------------------------------------------------<br>";
    echo" Pembeli Adalah Raja ";
}
?>

    </center>
</body>
</html>