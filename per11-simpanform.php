<?php
	// koneksi dengan database mysql
	include("per11-koneksi.php");
	
	// mengambil nilai dari form input buku tamu
	$nama=$_POST['nama'];
	$nohp=$_POST['nohp'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$tanggal = date("Y-m-d");
	$sql="INSERT INTO data_tamu(nama,nohp,email,pesan,tanggal) values ('$nama','$nohp','$email','$pesan','$tanggal')";
	mysqli_query($koneksi,$sql) or die (mysqli_error());
	header('location:per11-form-tamu.php');

	echo "<SCRIPT>alert('Data Telah Tersimpan');window.location='per11-form-tamu.php'</SCRIPT>";
?>	