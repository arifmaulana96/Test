<html>
<head>
<title> Penggunaan List 2 </title>
</head>
<body>
<?php
	$program = array('Bobo','Doraemon','Spiderman');
	list($Majalah, , $Film) = $program;
	echo "Jenis Buku & Hiburan :";
	echo "<br />";
	echo "Cerpen : $Majalah";
	echo "<br />";
	echo "Bioskop : $Film";
?>
</body>
</html>
