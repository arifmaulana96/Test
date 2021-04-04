<?php
//include ("Pert13_koneksi.php");
$con = mysqli_connect("localhost", "root", "", "artikel_db");
$id = $_POST['id'];
$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time=date("Y-m-d  H:i:s");

$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$isi);

$query = "insert into articles (id,judul,penulis,lead,content,waktu)
	values('$id','$judul','$penulis','$lead','$isi','$time')";
$result = mysqli_query($con, $query);
if($result){
	echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
	echo "<a href=\"Per13-tampil.php\">List</A>";
}
else{
	echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
?>