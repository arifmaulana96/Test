<html>
<head>
	<title>contoh Penggunaan IF</title>
</head>
<body>
	<form method="post">
	 Besar Pembelian :
	<input type=text name=bayar><br><br>
	<input type=submit name="hitung" value="Tentukan Diskon">
	</form>
<?php
	 if (isset($_POST['hitung'])){
	 	$bayar   =$_POST['bayar'];

		$total_beli=intval($bayar);
		$diskon=0;

	  	if($total_beli>=200000)
	 		$diskon=0.1;
	 	else if ($total_beli>=100000)
	 		$diskon= 0.05;
	 	else
	 		$diskon=0.01;

	 $diskon=$diskon * intval($total_beli);
	 printf("Diskon = %s <br>\n", $diskon);
	 printf("Pembayaran = %s <br>\n", $total_beli-$diskon);
	 }
?>
</body>
</html> 
