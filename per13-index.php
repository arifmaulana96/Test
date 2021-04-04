<?php
echo "Halaman Admin Panel Berita";
include "per13-koneksi.php";
$perintah="SELECT * FROM articles ORDER BY id DESC";
$hasil=mysqli_query($con,$perintah);
echo("
<h2>List Artikel</h2>
<br><UL>
");
while ($row= mysqli_fetch_array($hasil))
{
echo("
<LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a
href=\"per13-edit.php?articleID=$row[0]\">Edit</a>
&nbsp;<a
href=\"per13-delete.php?articleID=$row[0]\">Hapus</a></LI><br>");
}echo("</table>");
echo "<br><a href=\"per13-form.php\">Tambah</a>";
?>