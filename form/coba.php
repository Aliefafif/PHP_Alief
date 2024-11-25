<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Seblak Ceu Iroh</title>
</head>
<body>
    <center>
        <form action="coba2.php" method="post"> 
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
    </center>
</body>
</html> 


