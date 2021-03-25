<html>
<head>
	<title>Form Buku Tamu</title>
<style>
	body{font-family:'Arial';font-size:18px;margin:0}
	.kecil{font-size:10px}
	a{color:#3498db}
	a:hover{color:#2980b9}
	input[type=text]{margin:5px auto 15px;padding:10px;color:#444;width:300px}
	fieldset{border:1px solid #ccc;width:50%;margin-left:auto;margin-right:auto;margin-top:10px;}
	input[type=submit]{color:#FFF;padding:0 20px;margin:10px 0 5px;cursor:pointer;background-color:#333;border:0;height:30px}
	.tanggal{float:right;font-size:12px}
	input[type=submit]:hover{background-color:#444}
	input[type=submit]:active{position:relative;top:2px}
</style>
</head>
<body>
	<fieldset>
	<legend>Buku Tamu</legend>
		<div align="right"><a href="per11-tampil.php"><button>Tampilkan Data</button></a></div>
		<form action="per11-simpanform.php" method="post">
			<p>Tanggal Kunjungan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
				<input type="text" name="tanggal" value="<?php echo date('Y-m-d');?>" readonly>
			</p>
			<p>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
				<input placeholder="Nama lengkap anda" type="text" name="nama" required/>
			</p>
			<p>No. Handphone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
				<input placeholder="08xxxxx" type="text" name="nohp"/>
			</p>
			<p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
				<input type="text" placeholder="@mail.com" name="email"/>
			</p>
			<p>Pesan:
				<textarea placeholder="Ketikan suatu pesan anda" cols="90" rows="10" name="pesan" required></textarea>
			</p>
			<p>
				<input type="submit" value="Simpan"/>
			</p>
		</form>

	</fieldset>
</body>
</html>