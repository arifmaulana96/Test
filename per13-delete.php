<?php
include "Per13-koneksi.php";
$id = $_GET['id'];

$perintah="DELETE FROM articles WHERE id ='$id'";
$hasil= mysqli_query ($con,$perintah);
if ($hasil) {
	echo "Artikel berhasil dihapus<br>";
echo "<a href=\"Per13-tampil.php\">Back</a>";
} else {
echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
ke database MySQL.";
}
?>