<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bilangan</title>
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
                    <select name="jenis_bilangan">
                        <option value="Kelipatan3">Kelipatan 3</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                        <option value="Terbesar_Ke_Terkecil">Dari Besar ke Kecil</option>
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

    <!-- PHP Output Section -->
    <h3>Hasil:</h3>
    <?php
    if (isset($_POST['kirim'])) { 
        $bilangan = $_POST['bilangan'];
        $jenis = $_POST['jenis_bilangan'];

        switch ($jenis) {
            case 'Kelipatan3':
                for ($i=3; $i <= $bilangan ; $i+=3) { 
                    echo"$i";
                }
                break;
            case 'Ganjil':
                for ($i=1; $i <= $bilangan ; $i+=2) { 
                        echo"$i";
                    }
                    break;
            case 'Genap':
                for ($i=2; $i <= $bilangan ; $i+=32) { 
                            echo"$i";
                        }
                        break;
            case 'Terbesar_ke_terkecil':
                for ($i=$bilangan; $i <= 1 ; $i--) { 
                                echo"$i";
                            }
                            break;  
                        }      
        }

    
    ?>
</center>
</body>
</html>