<?php
include ("Per13-koneksi.php");
$id = $_GET['id'];
// Query satu record artikel dari tabel sesuai nilai $articleID
$perintah="SELECT * FROM articles WHERE id ='$id'";
$hasil=mysqli_query($con,$perintah);
$row=mysqli_fetch_array($hasil);
$time=date("d M Y, H:i");
?>
<h1>Form Berita</h1>
<form name=article method=post action=per13-update.php>
<input type="hidden" name="ID" value="<?php echo "$row[id]" ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>ID</td>
<td>:</td>
<td><input type="text" name="id" size="50" class="masukan"
value="<?php echo "$row[id]" ?>"></td>
</tr>
<tr>
<td width="18%">Judul</td>
<td width="2%">:</td>
<td width="80%"><input type="text" name="judul" size="50" class="masukan"
value="<?php echo "$row[judul]" ?>"></td>
</tr>
<tr>
<td>Penulis</td>
<td>:</td>
<td><input type="text" name="penulis" size="50" class="masukan"
value="<?php echo "$row[penulis]" ?>"></td>
</tr>
<tr valign="top">
<td>Lead</td>
<td>:</td>
<td><textarea name="lead" rows="4" cols="50">
<?php echo "$row[lead]" ?></textarea></td>
</tr>
<tr valign="top">
<td>Content</td>
<td>:</td>
<td><textarea name="content" rows="4" cols="50">
<?php echo "$row[content]" ?></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="submit" name="masuk" value="Update" class="tombol">
<input type="reset" name="hapus" value="Cancel" class="tombol"></td>
</tr>
</table>
</form>