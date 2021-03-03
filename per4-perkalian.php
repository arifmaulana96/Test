<?php
@$bil_awal = $_POST['bil_awal'];
@$bil_akhir = $_POST['bil_akhir'];
@$pengali = $_POST['pengali'];
@$hasil_perkalian = 0;
@$hasil_penjumlahan = 0;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>AKUMULASI PERKALIAN</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Input Bilangan Awal</td>
                    <td>=</td>
                    <td><input name="bil_awal" type="text" value="<?php echo $bil_awal; ?>"/></td>
                </tr>
                <tr>
                    <td>Input Bilangan Akhir</td>
                    <td>=</td>
                    <td><input name="bil_akhir" type="text" value="<?php echo $bil_akhir; ?>"/></td>
                </tr>
                <tr>
                    <td>Input Bilangan Pengali (yang akan dikalikan)</td>
                    <td>=</td>
                    <td><input name="pengali" type="text" value="<?php echo $pengali; ?>"/></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit" value="SUBMIT"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        while ($bil_awal <= $bil_akhir) {
                            echo $bil_awal . " x " . $pengali." = ";
                            echo $hasil_perkalian = $bil_awal * $pengali."<br/>";
                            $bil_awal++;
                            $hasil_penjumlahan = $hasil_penjumlahan + $hasil_perkalian;
                        }   
                        
                            echo "========+<br/>".$hasil_penjumlahan;
                        
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
